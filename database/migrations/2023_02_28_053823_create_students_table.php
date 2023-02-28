<?php

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
        Schema::create('students', function (Blueprint $table) {
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
        Schema::dropIfExists('students');
    }
}
