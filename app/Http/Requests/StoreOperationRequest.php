<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperationRequest extends FormRequest
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
            'title' =>  'required|max:100',
            'date'  =>  'required|date_format:Y-m-d',
            'amount'    =>  'required|numeric|min:0',
            'type'  =>  'required|numeric|between:1,2',
            'category'  =>  'required|numeric|min:1'
        ];
    }
}
