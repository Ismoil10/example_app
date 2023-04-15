<?php

namespace App\Http\Requests\organisation;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganisationRequest extends FormRequest
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
                'legal_name' => ['required', 'string', 'unique:organisations, legal_name'],
                'description' => ['required', 'string'],
                'source' => ['required', 'string'],
                'inn' => ['required', 'string'],
                'phone_number' => ['string', 'max:19'],
               
            ];
        
    }
}
