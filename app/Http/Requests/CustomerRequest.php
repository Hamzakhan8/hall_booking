<?php

namespace App\Http\Requests;
use App\Models\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            $rules=[

                'full_name'=>[
                        'required',
                        'string',
                        'max:100'
                ],
            'email'=>[
                    'required',
                    'string',
                    'max:200'

            ],
            'password'=>[
                'required',
                'string',
                'max:200'

            ],
        'mobile'=>[
            'required',
            'string',
            'max:200'

        ],
    'address'=> [
        'required',
        'string',


    ],

    'photo'=> [
        'nullable',
        'string',


    ],


                ];

                return $rules;
    }
}
