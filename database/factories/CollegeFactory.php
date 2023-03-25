<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-03-21 12:26:04
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-03-23 17:56:57
 * @FilePath: /www/datamaker/database/factories/CollegeFactory.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' =>$this->faker->randomNumber(5, true).'班',
        //     'college'=> 1,
        //     'grade' => rand(3, 6),
        //     'department' => rand(7, 9),
        //     'level' => rand(12, 13),
        //     'status' => rand(0, 1),
        //     'affix' => rand(0, 1),
        //     'sort' => 1 ,
        //     'created_at'=>date('Y-m-d H:i:s')
        // ];

        return [
            'name' =>$this->faker->randomNumber(5, true).'班',
            'college'=> 2,
            'grade' => rand(3, 6),
            'department' => rand(10, 11),
            'level' => rand(12, 13),
            'status' => rand(0, 1),
            'affix' => rand(0, 1),
            'sort' => 1 ,
            'created_at'=>date('Y-m-d H:i:s')
        ];
    }
}
