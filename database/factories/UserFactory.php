<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->companyEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'image_url' => 'user_image/default-user-image.png',
            'address' => $this->faker->address,
            'birthday' => $this->faker->dateTime,
            'role' => $this->faker->numberBetween(0,2), //0: member, 1: admin, 2:superadmin
            'is_active' => 1,
            'remember_token' => Str::random(10),
        ];
    }
}
