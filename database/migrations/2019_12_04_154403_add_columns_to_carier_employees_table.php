<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCarierEmployeesTable extends Migration
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
            $table->string('first_skill')->nullable()->after('status');
            $table->string('Second_skill')->nullable()->after('first_skill');
            $table->string('third_skill')->nullable()->after('Second_skill');
            $table->string('forth_skill')->nullable()->after('third_skill');
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
            $table->dropColumn('first_skill');
            $table->dropColumn('second_skill');
            $table->dropColumn('third_skill');
            $table->dropColumn('forth_skill');
        });
    }
}
