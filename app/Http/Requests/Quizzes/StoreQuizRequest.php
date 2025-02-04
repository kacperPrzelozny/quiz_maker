<?php

namespace App\Http\Requests\Quizzes;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'category_id' => ['exists:categories,id'],
            'randomize' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Quiz name is required.',
        ];
    }

}
