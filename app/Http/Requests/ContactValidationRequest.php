<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

/**
 *
 */
class ContactValidationRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            $request->validate([
                'full_name' => 'required|string|min:5|max:150',
                'email' => 'required|string|min:5|max:100',
                'phone' => 'required|digits_between:10,12',
                'title' => 'required|string|min:5|max:50',
                'content' => 'required|string|min:10',
            ])
        ];
    }
}
