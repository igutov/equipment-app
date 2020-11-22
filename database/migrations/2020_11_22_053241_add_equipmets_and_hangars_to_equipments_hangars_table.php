<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEquipmetsAndHangarsToEquipmentsHangarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipments_hangars', function (Blueprint $table) {
            $table->bigInteger('equipments_id')->unsigned();
            $table->foreign('equipments_id')->references('id')->on('equipments');
            $table->bigInteger('hangars_id')->unsigned();
            $table->foreign('hangars_id')->references('id')->on('hangars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules', function (Blueprint $table) {
            //
        });
    }
}
