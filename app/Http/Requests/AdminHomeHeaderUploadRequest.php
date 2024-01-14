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
            'slider_img' => 'required|image',
            'caption' => 'required',
            'description' => 'required|max:600',
            'donation_cause' => 'nullable',
            'video_link' => 'nullable|active_url'
        ];
    }

    public function messages()
    {
        return[
            'video_link.active_url' => 'Youtube link must be an active URL.',
            'slider_img.required' => 'Header Image is required.',
            'slider_img.image' => 'Header Image field must be of type image.',
            'slider_img.mimes' => 'Image must be of types: jpg, png, jpeg, svg',
            'description.max' => "Maximum characters is 600 please"
        ];
    }
}
