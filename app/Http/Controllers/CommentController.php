<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('dashboard', compact('comments'));
    }

    public function getByUserId($user_id)
    {
        $comments = Comment::where('user_id', $user_id)->get();
        return view('dashboard', compact('comments'));
    }

    public function getByUniversityId($university_id)
    {
        $comments = Comment::where('university_id', $university_id)->get();
        return view('dashboard', compact('comments'));
    }

    public function store(Request $request)
    {
        // Valide les données de la requête
        $request->validate([
            'content' => 'required|string',
            'university_id' => 'required|exists:universities,id',
        ]);

        // Crée un nouveau commentaire
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = Auth::id(); // Utilise l'ID de l'utilisateur authentifié
        $comment->university_id = $request->input('university_id');
        $comment->save();

        // Retourne une redirection vers la vue show du commentaire créé
        return redirect()->route('comment.show', $comment->id)->with('success', 'Comment created successfully.');
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.show', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return redirect()->route('comment.show', $comment->id)->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('dashboard')->with('success', 'Comment deleted successfully.');
    }

}

