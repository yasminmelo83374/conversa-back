<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreConversationRequest;
use App\Models\Conversation;

class ConversationController extends Controller {
    public function index() {
        return response()->json(Conversation::with('messages')->get());
    }
    public function store(StoreConversationRequest $req) {
        $conv = Conversation::create(array_merge($req->validated(), ['user_id' => auth()->id()]));
        return response()->json($conv, 201);
    }
    public function show(Conversation $conversation) {
        return response()->json($conversation->load('messages'));
    }
}
