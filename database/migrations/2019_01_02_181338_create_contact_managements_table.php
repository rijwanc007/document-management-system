<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->string('job_title');
            $table->string('email_address');
            $table->string('website');
            $table->integer('mobile');
            $table->integer('home_phone');
            $table->string('link_profile');
            $table->string('facebook');
            $table->string('skype');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('description');
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
        Schema::dropIfExists('contact_managements');
    }
}
