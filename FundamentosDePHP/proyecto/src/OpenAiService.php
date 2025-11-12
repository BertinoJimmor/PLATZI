<?php

namespace App;

use OpenAI;

class OpenAiService 
{
    protected $client;
    
    public function __construct() 
    {
        $this->client = Ollama::client('SK...');
    }

    public function getResponse(string $input): string 
    {
        $result = $this->client->chat()->create([
            'model' => 'gpt-6.5-turbo',
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