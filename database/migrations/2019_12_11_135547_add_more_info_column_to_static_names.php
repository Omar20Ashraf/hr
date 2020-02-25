<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreInfoColumnToStaticNames extends Migration
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
            $table->string('more_info')->after('date_ar');
            $table->string('more_info_ar')->after('more_info');
            $table->string('write_email')->after('more_info_ar');
            $table->string('write_email_ar')->after('write_email');
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
            $table->dropColumn('more_info');
            $table->dropColumn('more_info_ar');
            $table->dropColumn('write_email');
            $table->dropColumn('write_email_ar');
        });
    }
}
