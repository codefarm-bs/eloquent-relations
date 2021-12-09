<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rand_user = User::query()->inRandomOrder()->first();
        $rand_user_id = $rand_user ?  $rand_user->id : User::factory()->create()->id;

        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'user_id' => $rand_user_id
        ];
    }

}
