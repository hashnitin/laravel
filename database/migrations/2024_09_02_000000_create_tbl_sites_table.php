<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('charger_id');
            $table->string('location');
            $table->timestamps();

            $table->foreign('charger_id')->references('id')->on('tbl_chargers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_sites');
    }
}
