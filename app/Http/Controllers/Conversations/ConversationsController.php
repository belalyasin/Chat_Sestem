<?php

namespace App\Http\Controllers\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    //
    public function index(Conversation $conversation, Request $request)
    {
        $conversations = Conversation::with(['messages', 'users'])->get();
        //    $conversations = Conversation::all();
        $conversations->map(function ($conversation) {
            $conversation->setAttribute('user_name', $conversation->getUserName());
            $conversation->setAttribute('first_message_date', optional($conversation->messages()->first())->created_at);
            // $conversation->setAttribute('is_read', auth()->user()->hasRead($conversation) !== null);
            $conversation->setAttribute('unread_count', $conversation->users()->whereNull('read_at')->count());

            return $conversation;
        });
        return inertia('Conversations/Index', compact('conversations', 'conversation'));
        // return inertia('Conversations/Index');
    }
    public function show(Conversation $conversation)
    {
        // dd($conversation);
        // $conversations = $request->conversations;
        $conversations = Conversation::with(['messages', 'users'])->get();
        // $conversations = $request->user()->conversations;
        // $request->user()->conversations()->updateExistingPivot($conversation, [
        //     'read_at' => now(),
        // ]);
        return inertia('Layouts/Content', compact('conversations', 'conversation'));
    }
}
