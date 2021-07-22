<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCreateRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'photo_id' => 'mimes:jpg,png,jpeg|max:5048'
        ];
    }

    public function messages(){
        return [
            'category_id.required' => 'Category is required!',
            'title.required' => 'Title is required!',
            'description.required' => 'Description is required!',
        ];
    }
}
