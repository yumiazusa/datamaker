<?php
/*
 * @Author: yumiazusa yumiazusa@hotmail.com
 * @Date: 2023-05-09 10:45:58
 * @LastEditors: yumiazusa yumiazusa@hotmail.com
 * @LastEditTime: 2023-05-09 10:47:03
 * @FilePath: /datamaker/database/migrations/2023_05_09_024558_alter_class_add_is_delete.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClassAddIsDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lv_class', function (Blueprint $table) {
            $table->tinyInteger('is_delete')->default(0)->comment('是否删除:0=否,1=是');
            $table->timestamp('deleted_at')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lv_class', function (Blueprint $table) {
            //
        });
    }
}
