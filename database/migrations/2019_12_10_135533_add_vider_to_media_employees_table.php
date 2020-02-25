<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViderToMediaEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('media_employees', function (Blueprint $table) {
            //
            $table->string('video')->nullable()->after('forth_skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media_employees', function (Blueprint $table) {
            //
             $table->dropColumn('video');
        });
    }
}
