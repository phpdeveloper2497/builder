<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' =>'required|string|max:255',
            'slug' =>'required|string|max:255',
            'content' =>'required|string|max:1000',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

}
