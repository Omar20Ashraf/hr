<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStaticNamesYable extends Migration
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
            $table->string('skills')->after('contact_ar');
            $table->string('skills_ar')->after('skills');
            $table->string('name')->after('skills_ar');
            $table->string('name_ar')->after('name');
            $table->string('job')->after('name_ar');
            $table->string('job_ar')->after('job');
            $table->string('location')->after('job_ar');
            $table->string('location_ar')->after('location');
            $table->string('full_time')->after('location_ar');
            $table->string('full_time_ar')->after('full_time');
            $table->string('part_time')->after('full_time_ar');
            $table->string('part_time_ar')->after('part_time');
            $table->string('freelance')->after('part_time_ar');
            $table->string('freelance_ar')->after('freelance');
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
            $table->dropColumn('skills');
            $table->dropColumn('skills_ar');
            $table->dropColumn('name');
            $table->dropColumn('name_ar');
            $table->dropColumn('job');
            $table->dropColumn('job_ar');
            $table->dropColumn('location');
            $table->dropColumn('location_ar');
            $table->dropColumn('full_time');
            $table->dropColumn('full_time_ar');
            $table->dropColumn('part_time');
            $table->dropColumn('part_time_ar');
            $table->dropColumn('freelance');
            $table->dropColumn('freelance_ar');
        });
    }
}
