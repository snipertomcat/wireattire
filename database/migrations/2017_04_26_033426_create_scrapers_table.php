<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scraper_details', function(Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable();
            $table->integer('data_ref_id');
        });

        Schema::create('scrapers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 20);
            $table->integer('detail_id')->unsigned();
            $table->timestamps();

            /**
             * Foreign keys
             */
            $table->foreign('detail_id')
                  ->references('id')
                  ->on('scraper_details')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scrapers', function(Blueprint $table) {
            $table->dropForeign('detail_id');
        });
        Schema::dropIfExists('scrapers');
        Schema::dropIfExists('scrapers_details');
    }
}
