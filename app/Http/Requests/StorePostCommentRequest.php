<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Autoriser la requête, par exemple en vérifiant l'utilisateur connecté
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'content' => 'required|string|min:1|max:1000',
            'comment_id' => 'nullable|exists:post_comments,id',
            'post_id' => 'required|exists:posts,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'content.required' => 'Le contenu du commentaire est obligatoire.',
            'content.string' => 'Le contenu du commentaire doit être une chaîne de caractères.',
            'content.min' => 'Le contenu du commentaire doit comporter au moins 5 caractères.',
            'content.max' => 'Le contenu du commentaire ne peut pas dépasser 1000 caractères.',
            'comment_id.exists' => 'Le commentaire parent spécifié n\'existe pas.',
            'post_id.required' => 'L\'ID de l\'article est obligatoire.',
            'post_id.exists' => 'L\'article spécifié n\'existe pas.',
        ];
    }
}
