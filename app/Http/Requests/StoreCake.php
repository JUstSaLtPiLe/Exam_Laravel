<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCake extends FormRequest
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
                'name' => 'required',
                'type' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'images' => 'required',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $description = $this->get('description');
            if (strpos($description,'rot') == true){
                $validator->errors()->add('description', 'Something is wrong with this field!');
            }
        });
    }
}
