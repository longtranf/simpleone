<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryUpdateRequest extends Request
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
            'category_name' => 'required|max:20',
            'category_description' => 'required|max:40',
            'order_number' => 'required|numeric|between:1,1000',
        ];
    }
}
