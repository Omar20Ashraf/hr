<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('email');
            $table->string('job_title');
            $table->string('exp_level')->nullable();
            $table->string('gender')->nullable();
            $table->string('education')->nullable();
            $table->string('job_time')->nullable();
            $table->string('years_experience')->nullable();
            $table->text('job_description');
            $table->string('image');
            $table->string('status');
            $table->string('slug');

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
        Schema::dropIfExists('media_companies');
    }
}
