<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\operation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startingDate = $this->faker->dateTimeThisYear('+1 month');
         $endingDate   = strtotime('+1 Week', $startingDate->getTimestamp());    
        return [
            'remember_token' => Str::random(10),
            'fees'=>$this->faker->randomNumber(),
            'postoperation_appointment'=>$this->faker->date(),
            'Op_room'=>$this->faker->numerify("###"),
            'Op_type' => $this->faker->randomElement($array = array ('CardioVascular', 'Transplant','Gynecological Surgery',
            'Colon and Rectal Surgery', 'Endocrine Surgery', 'General Surgery', 'Hand Surgery', 'Head and Neck Surgery')) ,
            'Op_case'=>$this->faker->randomElement($array = array ('1','0')),
            'Pssn'=>$this->faker->numerify("######"),
            'op_code'=>$this->faker->numerify("####"),
            'enter_date' => $startingDate,
            'release_date'   => $endingDate,
            // 'enter_date'=>$this->faker->dateTimeThisYear('+1 month'),
            // 'release_date'=>$this->strtotime('+1 Week', 'enter_date')

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
