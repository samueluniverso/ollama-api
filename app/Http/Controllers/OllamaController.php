<?php

namespace App\Http\Controllers;

use Cloudstudio\Ollama\Facades\Ollama;
use Illuminate\Http\Request;

set_time_limit(300);

class OllamaController extends Controller
{
    public function ask(Request $request)
    {
        $context = file_get_contents(base_path().'/data/univates.csv');

        $response = Ollama::agent("Você é um professor.")
            ->model('mistral')
            ->prompt("
                [INST]
                    $context
                [/INST]
                $request->prompt
            ")
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
