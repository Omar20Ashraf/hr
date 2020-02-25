<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarierStaticNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carier_static_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_name_ar');
            $table->string('job_title');
            $table->string('job_title_ar');
            $table->string('experience_level');
            $table->string('experience_level_ar');
            $table->string('education');
            $table->string('education_ar');
            $table->string('experience_years');
            $table->string('experience_years_ar');
            $table->string('job_description');
            $table->string('job_description_ar');
            $table->string('first_skill');
            $table->string('first_skill_ar');
            $table->string('second_skill');
            $table->string('second_skill_ar');
            $table->string('third_skill');
            $table->string('third_skill_ar');
            $table->string('forth_skill');
            $table->string('forth_skill_ar');
            $table->string('certificates');
            $table->string('certificates_ar');
            $table->string('personal_info');
            $table->string('personal_info_ar');
            $table->string('talk_about');
            $table->string('talk_about_ar');
            $table->string('qualification');
            $table->string('qualification_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carier_static_names');
    }
}
