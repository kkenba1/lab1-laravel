<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteStoreRequest extends FormRequest
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
     *@return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
<<<<<<< HEAD
            'subject' => 'required|string'
=======
            'subject' => 'required|string',
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
        ];
    }
}