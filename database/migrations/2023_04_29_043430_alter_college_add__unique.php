<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCollegeAddUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lv_college', function (Blueprint $table) {
            $table->unique(['college']);
        });

        Schema::table('lv_grade', function (Blueprint $table) {
            $table->unique(['grade']);
        });

        Schema::table('lv_department', function (Blueprint $table) {
            $table->unique(['department']);
        });

        Schema::table('lv_level', function (Blueprint $table) {
            $table->unique(['level']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lv_college', function (Blueprint $table) {
            //
        });
    }
}
