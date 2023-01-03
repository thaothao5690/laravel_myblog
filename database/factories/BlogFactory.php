<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;
    public function definition()
    {
        $user = 1;
        $status = [1, 10];
        $category = [1, 2, 3, 4, 5, 6];

        return [
            'title' => fake()->title(),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
            'status' => Arr::random($status),
            'user_id' => $user,
            'category_id' => Arr::random($category),
        ];
    }
}
