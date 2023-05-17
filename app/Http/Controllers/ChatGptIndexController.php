<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class ChatGptIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $id = null): Response
    {
/*        $all = Inertia::render('Chat/ChatIndex', [
            'chat' => fn () => $id ? Chat::firdOrFail($id) : null,
            'messages' => Chat::latest()->where('user_id', Auth::id())->get(),

        ]);

        dd($all);*/



        return Inertia::render('Chat/ChatIndex', [
            'chat' => fn () => $id ? Chat::findOrFail($id) : null,
            'messages' => Chat::latest()->where('user_id', Auth::id())->get(),

        ]);
    }
}
