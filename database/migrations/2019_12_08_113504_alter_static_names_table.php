<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStaticNamesTable extends Migration
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
            $table->string('date')->after('freelance_ar');
            $table->string('date_ar')->after('date');
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
            $table->dropColumn('date');
            $table->dropColumn('date_ar');
        });
    }
}
