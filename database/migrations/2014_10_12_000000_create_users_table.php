<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password');
            $table->string('gender', 191);
            $table->string('phone', 191);
            $table->string('country', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('district', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('postal_code', 191)->nullable();
            $table->string('role', 191);
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
}
