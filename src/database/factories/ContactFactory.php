<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['男性', '女性','その他']),
            'email' =>$this->faker->safeEmail(),
            'tell' =>$this->faker->phoneNumber(),
            'address' =>$this->faker->address(),
            'building' =>$this->faker->secondaryAddress(),
            'detail' =>$this->faker->text(20)
        ];
    }
}