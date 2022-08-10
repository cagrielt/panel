<?php

namespace App\Http\Requests\Backend\Publications;

use Illuminate\Foundation\Http\FormRequest;

class ManagePublicationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-publications');
    }

    /**
     * Get the validation rules that apply to the request.  
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
