<?php

namespace App\Http\Controllers;

use Cloudstudio\Ollama\Facades\Ollama;
use Illuminate\Http\Request;

class OllamaController extends Controller
{
    public function ask(Request $request)
    {
        $response = Ollama::agent("Você é um ser humano.")
            ->prompt($request->prompt)
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
