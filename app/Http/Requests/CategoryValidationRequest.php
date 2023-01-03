<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 *
 */
class CategoryValidationRequest extends FormRequest
{

	public mixed $image;
	public mixed $name;
	public mixed $status;

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
                'name' => 'required|string',
                'status' => 'required|integer',
                'image' => $request->id ? '' : 'required' . '|mimes:jpg,png,jpeg|max:5048',
            ]),
            $request->input('image') ? $request->file('image')->guessExtension() : ''
        ];
    }
}
