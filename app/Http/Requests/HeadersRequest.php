<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'imageLink' => 'required|string',
            'caption' => 'required|string|max:50',
            'desc' => 'required|string|max:800',
            'donation_cause' => 'nullable',
            'video_link' => 'url|nullable'
        ];
    }

    public function messages()
    {
        return[
            'imageLink.required' => 'Please upload an image',
            'desc.required' => 'The description field is required'
        ];
    }
}
