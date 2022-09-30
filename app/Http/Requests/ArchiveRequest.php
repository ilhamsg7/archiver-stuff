<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArchiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch($this->method()){
            case 'POST': {
                return [
                    'categories_id' => 'required|exists:categories,id',
                    'letter_number' => 'required|string|unique:archives,letter_number',
                    // 'slug' => 'required|string',
                    'title' => 'required|string',
                    // 'file' => 'required|file|mimes:pdf',
                ];
            } break;
            case 'PUT': {
                return [
                    'categories_id' => 'required|exists:categories,id',
                    'letter_number' => 'required|string|unique:archives,letter_number',
                    // 'slug' => 'required|string',
                    'title' => 'required|string',
                    // 'file' => 'required|file|mimes:pdf',
                ];
            } break;
        }
    }
}
