<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterModalystProductCreateUniqueOnImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modalyst_product', function(Blueprint $table) {
            $table->string('image',255)->default('""')->change();
            $table->unique('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modalyst_product', function(Blueprint $table) {
            $table->dropUnique('image');
        });
    }
}
