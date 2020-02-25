<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('phone_ar');
            $table->string('gender');
            $table->string('gender_ar');
            $table->string('address');
            $table->string('address_ar');
            $table->string('image');
            $table->string('image_ar');
            $table->string('email');
            $table->string('email_ar');
            $table->string('password');
            $table->string('password_ar');
            $table->string('re_password');
            $table->string('re_password_ar');
            $table->string('login');
            $table->string('login_ar');
            $table->string('register');
            $table->string('register_ar');
            $table->string('login_now');
            $table->string('login_now_ar');
            $table->string('register_now');
            $table->string('register_now_ar');
            $table->string('create_account');
            $table->string('create_account_ar');
            $table->string('birth_date');
            $table->string('birth_date_ar');
            $table->string('work_experience');
            $table->string('work_experience_ar');
            $table->string('military_service');
            $table->string('military_service_ar');
            $table->string('contact');
            $table->string('contact_ar');
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
        Schema::dropIfExists('static_names');
    }
}
