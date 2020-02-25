<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMilitryServicesToCarierEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carier_employees', function (Blueprint $table) {
            //
            $table->string('military_service')->nullable()->after('personal_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carier_employees', function (Blueprint $table) {
            //
            $table->dropColumn('military_service');
        });
    }
}
