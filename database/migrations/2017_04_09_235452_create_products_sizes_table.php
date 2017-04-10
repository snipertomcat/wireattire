<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('key');
        });

        Schema::create('products_sizes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->timestamps();

            $table->foreign('size_id')
                ->references('id')
                ->on('sizes');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_sizes', function(Blueprint $table) {
            $table->dropForeign('products_sizes_size_id_foreign');
            $table->dropForeign('products_sizes_product_id_foreign');
        });

        Schema::dropIfExists('products_sizes');
    }
}
