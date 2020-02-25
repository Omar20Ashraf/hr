<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCarierStaticNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carier_static_names', function (Blueprint $table) {
            //
            $table->string('job_type')->after('qualification_ar');
            $table->string('job_type_ar')->after('job_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carier_static_names', function (Blueprint $table) {
            //
        });
    }
}
