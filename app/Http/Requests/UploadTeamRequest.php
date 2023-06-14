<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadTeamRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|dimensions:min_height=300,max_height=900,min_width=600',
            'full_name' => 'required',
            'job_title' => 'required|max:600',
            'facebook' => 'nullable|active_url',
            'linkedin' => 'nullable|active_url',
            'instagram' => 'nullable|active_url',
            'twitter' => 'nullable|active_url'
        ];
    }

    public function messages()
    {
        return[
            'image.dimensions' => 'Youtube link must be an active URL.',
        ];
    }
}
