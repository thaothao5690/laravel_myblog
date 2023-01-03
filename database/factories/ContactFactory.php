<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contact::class;
    public function definition()
    {
        return [
            'full_name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'title' => fake()->title(),
            'content' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
            'status' => -1,
            'reply' => '',
        ];
    }
}
