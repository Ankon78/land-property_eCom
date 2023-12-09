<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends Controller
{
    public function showChatPage()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        // Broadcast the message to all connected clients
        Redis::publish('chat', json_encode(['message' => $message]));

        return response()->json(['status' => 'Message sent']);
    }
}
