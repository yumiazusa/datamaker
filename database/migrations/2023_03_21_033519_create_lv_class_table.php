<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-03-21 11:35:19
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-03-23 17:54:55
 * @FilePath: /www/datamaker/database/migrations/2023_03_21_033519_create_lv_college_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jialeo\LaravelSchemaExtend\Schema;

class CreateLvClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /**
         * 学院年级班级列表
         */
        Schema::create('lv_class', function (Blueprint $table) {
            $table->comment = '班级表';
            $table->smallIncrements('id')->comment('班级id')->index();
            $table->string('name',100)->default('')->comment('班级名称');
			$table->unsignedTinyInteger('college')->default()->comment('学院');
            $table->unsignedTinyInteger('grade')->default()->comment('年级');
            $table->unsignedTinyInteger('department')->default()->comment('系部');
            $table->unsignedTinyInteger('level')->default()->comment('层次');
            $table->unsignedtinyInteger('status')->default(1)->comment('侧边栏显示状态:0=隐藏,1=显示');
            $table->unsignedtinyInteger('affix')->default(0)->comment('是否固定面板显示:0=否,1=是');
            $table->unsignedInteger('sort')->default(1)->comment('排序');
            $table->timestamp('created_at')->nullable()->comment('创建时间');
            $table->timestamp('updated_at')->nullable()->comment('更新时间');
            $table->unique(['id']);
        });

        Schema::create('lv_college_category', function (Blueprint $table) {
            $table->comment = '学院层级分类表';
            $table->smallIncrements('id')->comment('学院分类id');
            $table->string('category',100)->default('')->comment('分类名称');
            $table->unsignedTinyInteger('level')->default()->comment('1=学院,2=年级,3=系部,4=层次');
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
        Schema::dropIfExists('lv_class');
        Schema::dropIfExists('lv_college_category');
    }
}
