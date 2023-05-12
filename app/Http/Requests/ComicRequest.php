<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
        return [
            'title' => 'required|max:255',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required|decimal:2|lt:1000',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
}
