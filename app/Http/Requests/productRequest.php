<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class productRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
            'user_email' => 'required|email',
            'user_address' => 'required|string',
            'user_mobile' => 'required|string',
            'p_title' => 'required|string',
            'p_type'   => 'required|string',
            'p_role'   => 'required|string',
            'p_details'   => 'required|string',
            'p_address'    => 'required|string',
            'p_image'  => 'required|image|mimes:jpeg,jpg,png,svg,gif,psd|max:1024'
        ];

       
        return $rules;
       
    }
    public function messages()
    {

        return [
        
        ];

    }

}
