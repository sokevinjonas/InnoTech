<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostCommentRequest;
use App\Http\Requests\UpdatePostCommentRequest;
use App\Models\PostComment;

class PostCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostCommentRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        PostComment::create($data);
        // Redirige ou retourne une réponse appropriée
        return back()->with('success', 'Commentaire ajouté avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostCommentRequest $request, PostComment $postComment)
    {
        // Mettre à jour le commentaire
        $postComment->update([
            'content' => $request->input('content'),
            'comment_id' => $request->input('comment_id'),
        ]);

        // Redirige ou retourne une réponse appropriée
        return back()->with('success', 'Commentaire mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostComment $postComment)
    {
        // Sauvegarder l'ID du post pour redirection
        $postId = $postComment->post_id;

        // Supprimer le commentaire
        $postComment->delete();

        // Redirige ou retourne une réponse appropriée
        return back()->with('success', 'Commentaire supprimé avec succès.');
    }
}
