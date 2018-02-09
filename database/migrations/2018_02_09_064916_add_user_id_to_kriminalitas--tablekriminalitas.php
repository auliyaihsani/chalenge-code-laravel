<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToKriminalitasTablekriminalitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kriminalitas', function (Blueprint $table) {

        $table->integer('user_id')->after('informasi');
         
         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kriminalitas', function (Blueprint $table) {

            $table->dropColomn('user_id');
         });    

    }
}
