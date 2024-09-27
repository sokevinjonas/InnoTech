<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $postId = $this->route('post');
        // dd($this->all());

        return [
            'title' => ['required', 'string', 'max:255', Rule::unique('posts', 'title')->ignore($postId)],
            'description' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|exists:post_categories,id',
            'status' => 'required|in:published,not_published',
            'comments_enabled' => 'nullable',
            'content' => 'required|string',
        ];
    }
}
