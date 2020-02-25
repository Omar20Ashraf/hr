<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGetInTotchToStaticTable extends Migration
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

            $table->string('get_in_touch')->after('video_ar');
            $table->string('get_in_touch_ar')->after('get_in_touch');
            $table->string('submit')->after('get_in_touch_ar');
            $table->string('submit_ar')->after('submit');
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
            $table->dropColumn('get_in_touch');
            $table->dropColumn('get_in_touch_ar');
            $table->dropColumn('submit');
            $table->dropColumn('submit_ar');
        });
    }
}
