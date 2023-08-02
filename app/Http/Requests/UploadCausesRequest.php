<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadCausesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
            'caption' => 'required',
            'goal' => 'required|min:500|integer|numeric',
            'money_raised' => 'required|integer|numeric',
            'excerpt' => 'required',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'image.required' => 'An Image is required',
            'goal.min' => 'Minimum goal is GH₵ 500',
        ];
    }
}
