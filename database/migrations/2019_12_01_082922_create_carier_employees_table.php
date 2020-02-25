<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarierEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carier_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('address')->nullable();
            $table->date('birth_date');
            $table->string('education')->nullable();
            $table->string('job_title');
            $table->string('years_experience')->nullable();

            $table->text('personal_info');
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('carier_employees');
    }
}
