<?php

namespace App\Http\Controllers;

use Cloudstudio\Ollama\Facades\Ollama;
use Illuminate\Http\Request;

class OllamaController extends Controller
{
    public function ask(Request $request)
    {
        ini_set('max_execution_time', 300);

        $response = Ollama::prompt($request->prompt)
            ->model('openchat')
            ->options([
                'temperature' => 0.8
            ])
            ->stream(false)
            ->ask();

        return response()->json([
            'answer' => $response['response']
        ]);
    }
}
