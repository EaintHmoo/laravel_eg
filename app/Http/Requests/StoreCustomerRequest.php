<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_create');
    }

    public function rules()
    {
        return [
            'attention_person' => [
                'string',
                'required',
            ],
            'factory_name' => [
                'string',
                'required',
            ],
            'address' => [
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'email' => [
                'unique:customers,email,',
                'required',
            ],
        ];
    }
}
