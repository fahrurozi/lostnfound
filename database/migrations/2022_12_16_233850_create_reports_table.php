<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->string('product_type', 191);
            $table->string('brand', 191);
            $table->string('category', 191);
            $table->string('color', 191);
            $table->string('description', 191);
            $table->date('missing_date');
            $table->time('clock', $precision = 0);
            $table->string('location', 191);
            $table->string('location_name', 191);
            $table->string('detail_location', 191);
            $table->smallInteger('still_yogyakarta');
            $table->string('image', 191)->nullable();
            $table->string('status', 191);
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
        Schema::dropIfExists('reports');
    }
}
