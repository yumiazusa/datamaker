<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassAttributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'college_id' => rand(1, 3),
            'grade_id' => rand(1, 3),
            'department_id'=>rand(1,7),
            'level_id' => rand(1, 2),
            'class_id' =>
        ];
    }
}
