<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('employer')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cell')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('Job_category_id')->nullable();
            $table->string('speciality')->nullable();
            $table->string('position')->nullable();
            $table->string('salary')->nullable();
            $table->boolean('is_admin')->nullable(); // adding this
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
