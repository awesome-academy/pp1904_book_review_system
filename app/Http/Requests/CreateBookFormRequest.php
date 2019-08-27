<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> 'required|min:3',
            'author'=> 'required|min:3',
            'public_date'=> 'required|min:3',
            'publishing_company'=> 'required',
            'category_id'=> 'required|min:3',
            'detail'=> 'required|min:3',
            'image'=> 'required|min:3',
        ];
    }
}
