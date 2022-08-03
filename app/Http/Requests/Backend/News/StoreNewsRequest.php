<?php

namespace App\Http\Requests\Backend\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-news');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { 
        return [
            'intived_number' => ['required', 'max:191'],
            'invited_talks' => ['required', 'string'],
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
            'intived_number.required' => 'Invited Number  field is required.',
            'intived_number.max' => 'Invited Number may not be grater than 191 character.',
            'invited_talks.required' => 'Invited Description field is required.',
        ];
    }
}
