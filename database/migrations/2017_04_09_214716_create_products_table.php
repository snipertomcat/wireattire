<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_category', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('type')->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->float('price', 8, 2);
            $table->boolean('isActive')->default(true);
            $table->integer('package_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('package_id')
                ->references('id')
                ->on('subscription_packages')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('products_category');
        });

        Schema::create('products_images', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('path');
            $table->boolean('is_active')->default(true);
            $table->integer('product_id')->unsigned();
            $table->timestamps();

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
        //
    }
}
