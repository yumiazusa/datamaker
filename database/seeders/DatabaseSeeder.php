<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2022-04-12 21:37:49
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-02-28 15:46:14
 * @FilePath: /www/datamaker/database/seeders/DatabaseSeeder.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Students::factory(10)->create();
    }
}
