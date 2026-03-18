<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class RayaController extends Controller
{
    public function index()
    {
        $ucapan = Comment::where('type', 'ucapan')->latest()->get();
        $lawak = Comment::where('type', 'lawak')->latest()->get();
        return view('raya', compact('ucapan', 'lawak'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'message' => 'required|max:255',
            'type' => 'required|in:ucapan,lawak',
        ]);

        if ($request->type === 'lawak' && !session('admin_mode')) {
            return response()->json(['success' => false, 'message' => 'Hanya Admin boleh hantar lawak.'], 403);
        }

        $comment = Comment::create([
            'name' => $request->name,
            'message' => $request->message,
            'type' => $request->type,
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'comment' => [
                    'name' => $comment->name,
                    'message' => $comment->message,
                    'created_at' => $comment->created_at->diffForHumans()
                ]
            ]);
        }

        return redirect('/raya');
    }

    public function adminLogin($secret)
    {
        // Simple secret key check
        if ($secret === 'azhan-raya-2026') {
            session(['admin_mode' => true]);
            return redirect('/raya')->with('success', 'Admin Mode Active 🔓');
        }
        
        return redirect('/raya');
    }

    public function destroy($id)
    {
        if (session('admin_mode')) {
            $comment = Comment::findOrFail($id);
            $comment->delete();
            return redirect('/raya')->with('success', 'Komen telah dipadam.');
        }

        return redirect('/raya');
    }

    public function randomLawak()
    {
        $lawak = Comment::where('type', 'lawak')->inRandomOrder()->first();
        return response()->json($lawak);
    }
}
