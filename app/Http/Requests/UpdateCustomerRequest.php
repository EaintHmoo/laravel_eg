<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_edit');
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
                'unique:customers,email,' . request()->route('customer')->id,
                'required',
            ],
        ];
    }
}
