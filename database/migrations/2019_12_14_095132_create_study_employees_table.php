<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('address')->nullable();
            $table->date('birth_date');
            $table->string('education')->nullable();
            $table->string('job_title');
            $table->string('years_experience')->nullable();

            $table->text('personal_info');
            $table->string('military_service')->nullable();
            $table->string('image');
            $table->string('status');
            $table->string('first_skill')->nullable();
            $table->string('Second_skill')->nullable();
            $table->string('third_skill')->nullable();
            $table->string('forth_skill')->nullable();
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('study_employees');
    }
}
