<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class OllamaAiService 
{
    protected $client;
    
    public function __construct() 
    {
        $this->client = Ollama::client();
    }

    public function getResponse(string $input): string 
    {
        $result = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
               ['role' => 'system', 'content' => 'You are a deepseek'],
               ['role' => 'user', 'content' => 'Hello!'],
               ['role' => 'assistant', 'content' => 'Hi! How can I help you today?'],
               ['role' => 'user', 'content' => $input],
            ],
        ]);

        return $result->message->content;
    }
}