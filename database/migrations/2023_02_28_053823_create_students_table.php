<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-03-05 22:17:35
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-03-08 18:20:08
 * @FilePath: /www/datamaker/database/migrations/2023_02_28_053823_create_students_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jialeo\LaravelSchemaExtend\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * 创建新迁移文件：php artisan make:migration create_xxxx_table
     * 执行迁移：php artisan migrate
     * 
     * @return void
     */
    public function up()
    {
         /**
         * 学生表
         */
        Schema::create('lv_students', function (Blueprint $table) {
            $table->comment = '学生表';
            $table->increments('id')->comment('学生ID');
            $table->string('name',100)->default('')->comment('学生姓名');
            $table->string('email',50)->unique()->default('')->comment('邮箱');
            $table->tinyInteger('sex')->default(0)->comment('性别:0=未知,1=男,2=女');
            $table->string('birth',20)->default('')->comment('出生年月日');
            $table->string('phone',100)->unique()->default('')->comment('手机号');
            $table->integer('stdid')->unique()->nullable()->comment('学号');
            $table->string('password')->default('')->comment('密码');
            $table->integer('class_id')->nullable()->comment('班级ID');
            $table->integer('grade_id')->nullable()->comment('年级ID');
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
        Schema::dropIfExists('students');
    }
}
