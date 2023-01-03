<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 *
 */
class BlogValidationRequest extends FormRequest
{

	public mixed $description;
	public mixed $status;
	public mixed $category;
	public mixed $title;
	public mixed $image;

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
                'title' => 'required|string',
                'description' => 'required|string|min:100',
                'content' => 'required|string|min:1000',
                'status' => 'required|integer',
                'category' => 'required|integer',
                'image' => $request->id ? '' : 'required' . '|mimes:jpg,png,jpeg|max:5048',
            ]),
            $request->input('image') ? $request->file('image')->guessExtension() : ''
        ];
    }
}
