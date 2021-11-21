<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'lastname'=>$this->faker->name(),
        'firstname'=>$this->faker->name(),
        'email'=>$this->faker->email(),
        'gender'=>$this->faker->randomElement($array=[1,2]),
        'postcode' => $this->faker->randomNumber(7),
        'address' => $this->faker->address(),
        'building_name'=>$this->faker->word(),
        'opinion'=>$this->faker->realText(100)

        ];
    }
}
