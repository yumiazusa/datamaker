<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-02-28 14:00:06
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-02-28 14:00:38
 * @FilePath: /www/datamaker/database/migrations/2023_02_28_060006_create_student_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jialeo\LaravelSchemaExtend\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->comment = '学生表';
            $table->increments('id')->comment('学生ID');
            $table->string('name',100)->default('')->comment('学生姓名');
            $table->string('phone',100)->default('')->comment('手机号');
            $table->string('stdid',50)->unique()->default('')->comment('学号');
            $table->string('password')->default('')->comment('密码');
            $table->string('class_id')->default('')->comment('班级ID');
            $table->string('grade_id')->default('')->comment('年级ID');
            $table->integer('group_id')->nullable()->comment('权限组ID');
            $table->integer('project_id')->nullable()->comment('项目ID');
            $table->tinyInteger('status')->default(1)->comment('状态:0=禁用,1=启用');
            $table->timestamp('created_at')->nullable()->comment('创建时间');
            $table->timestamp('updated_at')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
