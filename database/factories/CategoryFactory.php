<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->words(rand(2,6), true); // fx "Test Category"
        
        $userCreatedAt = fake()->dateTimeBetween('-6 days', '-5 days');
        $categoryCreatedAt = fake()->dateTimeBetween($userCreatedAt, '-3 days');
        $categoryUpdatedAt = fake()->dateTimeBetween($categoryCreatedAt, 'now');
        
        return [
            'user_id' => User::factory(), // Evt. generer tilknyttet bruger
            'name' => $name,
            'slug' => Str::slug($name),
            'created_at' => $categoryCreatedAt,
            'updated_at' => $categoryUpdatedAt,
        ];
    }
}
