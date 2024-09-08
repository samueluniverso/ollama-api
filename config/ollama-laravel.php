<?php

// Config for Cloudstudio/Ollama

return [
    'model' => env('OLLAMA_MODEL', 'openchat'),
    'url' => env('OLLAMA_URL', 'http://localhost:11434'),
    'default_prompt' => env('OLLAMA_DEFAULT_PROMPT', 'Olá, como posso te ajudar?'),
    'connection' => [
        'timeout' => env('OLLAMA_CONNECTION_TIMEOUT', 300),
    ],
];
