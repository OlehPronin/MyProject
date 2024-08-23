<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $article = Article::findOrFail($articleId);

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->article_id = $article->id;
        $comment->user_id = auth()->id();
        $comment->save();

        return redirect()->route('articles.show', $article->id);
    }
}   
