<?php
namespace App\Http\Controllers;
use App\Http\Requests\SendMessageRequest;
use App\Models\Conversation;
use App\Models\Message;

class MessageController extends Controller {
    public function store(SendMessageRequest $req, Conversation $conversation) {
        $msg = Message::create(['conversation_id' => $conversation->id, 'sender' => 'user', 'content' => $req->content]);
        return response()->json($msg, 201);
    }
}
