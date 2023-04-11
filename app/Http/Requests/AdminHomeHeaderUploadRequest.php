<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminHomeHeaderUploadRequest extends FormRequest
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
            'slider_img' => 'required|image|mimes:png,jpg,jpeg,svg|dimensions:min_width=700,min_width=900',
            'caption' => 'required',
            'description' => 'required|max:600',
            'donation_cause' => 'nullable',
            'video_link' => 'nullable|active_url'
        ];
    }

    public function messages()
    {
        return[
            'video_link.required' => 'Please upload an image',
            'desc.required' => 'The description field is required'
        ];
    }
}
