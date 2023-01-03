<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 *
 */
class Validate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs',
            'description' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|integer',
        ]);

        $title = $request->old('title');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
