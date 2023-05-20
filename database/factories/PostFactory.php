<?php

namespace Database\Factories;

use App\Enums\PostStatusEnum;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->title(),
            'body' => fake()->sentence(),
            'status' => $this->faker->randomElement([
                PostStatusEnum::INACTIVE(),
                PostStatusEnum::PUBLISHED(),
                PostStatusEnum::PUBLISHED(),
            ])
        ];
    }

    /**
     * @return PostFactory
     */
    public function inactive(): PostFactory
    {
        return $this->state([
            'status' => PostStatusEnum::INACTIVE()
        ]);
    }

    /**
     * @return PostFactory
     */
    public function published(): PostFactory
    {
        return $this->state([
            'status' => PostStatusEnum::PUBLISHED()
        ]);
    }

    /**
     * @return PostFactory
     */
    public function draft(): PostFactory
    {
        return $this->state([
            'status' => PostStatusEnum::DRAFT()
        ]);
    }
}
