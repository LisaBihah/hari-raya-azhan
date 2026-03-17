<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class RayaController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('raya', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'message' => 'required|max:255',
        ]);

        Comment::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect('/raya')->with('success', 'Ucapan anda telah dihantar! Selamat Hari Raya!');
    }
}
