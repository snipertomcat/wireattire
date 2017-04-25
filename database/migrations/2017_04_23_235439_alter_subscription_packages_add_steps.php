<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSubscriptionPackagesAddSteps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_packages', function (Blueprint $table) {
            $table->integer('steps')->unsigned()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('subscription_packages', function (Blueprint $table) {
            $table->dropColumn('steps');
        });
        Schema::enableForeignKeyConstraints();
    }
}