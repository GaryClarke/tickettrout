<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirstnameAndLastnameColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name');
            $table->string('last_name')->after('first_name');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->integer('points')->default(147);
            $table->string('dob')->default('14/04/2016');
            $table->string('region')->default('London');
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

            $table->dropColumn(['first_name', 'last_name', 'gender', 'points', 'dob', 'region']);
        });
    }
}
