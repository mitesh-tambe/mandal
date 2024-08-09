<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'email_id' => $this->faker->email(),
            'phone_no' => $this->faker->phoneNumber(),
            'age' => $this->faker->numberBetween(18,80),
            'dob' => $this->faker->date(),
            'member_type' => $this->faker->numberBetween(1,4),
            'status' => 1,
        ];
    }
}
