<?php

namespace Database\Factories;

use App\Models\OperationRoom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'op_date' => $this->faker->optional()->date(),
            'operation_room_id' => null,
            // 'operation_room_id' => OperationRoom::all()->random()->id,
            'Op_case' => $this->faker->randomElement($array = array('1', '0')),
            'cost' => $this->faker->optional()->numberBetween(1200, 7000),
            'patient_ssn' => User::whereRole('Patient')->get()->random()->ssn,
            'doctor_ssn' => User::whereRole('Doctor')->get()->random()->ssn,
            'surgery_name' => $this->faker->randomLetter(),
        ];
    }
}
