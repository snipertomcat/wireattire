<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalystProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalyst_product', function(Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->string('title', 255);
            $table->string('title_short', 100);
            $table->string('price', 20);
            $table->string('commission', 20);
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
        Schema::dropIfExists('modalyst_product');
    }
}
