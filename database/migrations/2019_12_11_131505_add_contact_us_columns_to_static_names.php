<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactUsColumnsToStaticNames extends Migration
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
            $table->string('contact_us')->after('phone_ar');
            $table->string('contact_us_ar')->after('contact_us');
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
            $table->dropColumn('contact_us');
            $table->dropColumn('contact_us_ar');
        });
    }
}
