<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-02-28 15:59:11
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-02-28 16:37:46
 * @FilePath: /www/datamaker/database/seeders/StudentssSeeder.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Students::factory(10)->create();
    }
}
