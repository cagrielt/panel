<?php

namespace App\Http\Requests\Backend\Publications;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-publications');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { 
        return [
            'year' => ['required', 'max:191'],
            'link' => ['required', 'string'],
            'description' => ['required', 'string'],
            'status' => ['boolean'],
        ];
    }

    /**
     * Show the Messages for rules above.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'year.required' => 'Invited Number  field is required.',
            'link.max' => 'Invited Number may not be grater than 191 character.',
            'description.required' => 'Invited Description field is required.',
        ];
    }
}
