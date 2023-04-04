<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class OrderApiRequest extends FormRequest
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





    public function rules()
    {
        return [




            'start_date' => 'required',
            'Expiry_Date' => 'required',


        ];
    }

    public function failedValidation(Validator $validator)
    {


         throw new HttpResponseException(response()->json([
            'message' =>$validator->errors(),
            'status' => 0,
            'code' => 400,
        ]));
    }

}
