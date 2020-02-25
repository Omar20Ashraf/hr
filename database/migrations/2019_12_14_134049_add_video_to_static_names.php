<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideoToStaticNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('static_names', function (Blueprint $table) {
            //
            $table->string('video')->after('image_ar');
            $table->string('video_ar')->after('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('static_names', function (Blueprint $table) {
            //
            $table->string('video');
            $table->string('video_ar');
        });
    }
}
