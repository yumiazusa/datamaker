<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-02-28 14:28:15
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-02-28 14:34:29
 * @FilePath: /www/datamaker/database/factories/StudentsFactory.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' =>$this->faker->phoneNumber,
            'stdid' =>$this->faker->unique()->numberBetween($min = 2000000, $max = 3000000),
            'status' => rand(0, 1),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
