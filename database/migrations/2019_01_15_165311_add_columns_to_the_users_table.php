<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTheUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('employee_pic')->after('name');
            $table->string('first_name')->after('employee_pic');
            $table->string('last_name')->after('first_name');
            $table->string('company')->after('last_name');
            $table->string('job_title')->after('company');
            $table->string('website')->after('email');
            $table->integer('mobile_phone')->after('website');
            $table->integer('home_phone')->after('mobile_phone');
            $table->string('link_profile')->after('home_phone');
            $table->string('facebook')->after('link_profile');
            $table->string('sky_id')->after('facebook');
            $table->string('confirm_password')->after('password');
            $table->string('address')->after('confirm_password');
            $table->longText('notes')->after('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
}
