<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $role = $this->faker->randomElement(['patient', 'doctor', 'admin', 'nurse']);
        $insurance_provider = $this->faker->randomElement(['Yes', 'No']);
        return [

            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'Role' => $this->faker->randomElement(['Doctor', 'Patient']),
            'remember_token' => Str::random(10),
            'fname' => $this->faker->name,
            'mname' => $this->faker->name,
            'lname' => $this->faker->name,
            'email' => $this->faker->email,
            'birth_date' => $this->faker->date,
            // 'gender'=> $this->faker->name($gender),
            'gender' => $this->faker->randomElement($array = array('male', 'female')),
            'insurance_provider' => $this->faker->randomElement($array = array('Yes', 'No')),
            // 'insurance_provider'=> $this->faker->name($insurance_provider),
            // 'Role'=> $this->faker->name($role),
            'ssn' => $this->faker->numerify("#########"),
            'phone_number1' => $this->faker->numerify("#########"),
            //'phone_number2'=>$this->faker->phoneNumber(),
            'email_verified_at' => $this->faker->date,

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
