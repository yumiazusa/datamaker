<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-05-07 13:45:45
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-05-07 13:46:23
 * @FilePath: /datamaker/database/migrations/2023_05_07_054545_alter_lv_students_delete_grade_id.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLvStudentsDeleteGradeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lv_students', function (Blueprint $table) {
            $table->dropColumn(['grade_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lv_students', function (Blueprint $table) {
            //
        });
    }
}
