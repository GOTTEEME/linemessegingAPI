<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LinePushController extends Controller
{
    public function pushMessage(Request $request)
    {
        $accessToken = '6hLt6f9c46+oAI8ue6RXwg263IFX8WkDJu6NwBPIvQ6BsfOF+QGDEvkXSioZNMxTId8bLYqY4lntzC7aVw/ab2cQUigrie3v9XY0GmE/ciPtx2GMDJH48oqDhHm39YPZcDH9BHcn0zSaFRC8Vn8TRgdB04t89/1O/w1cDnyilFU=';
        

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $accessToken,
        ];

        $message = [
            'to' => 'U6698b90a07be46d6c563b0ee7dcc5c44',
            'messages' => [
                [
                    'type' => 'text',
                    'text' => 'Hello word',
                    

                ],
            ],
        ];

        $response = Http::withHeaders($headers)->post('https://api.line.me/v2/bot/message/push', $message);


        return $response->json();
    }
}
