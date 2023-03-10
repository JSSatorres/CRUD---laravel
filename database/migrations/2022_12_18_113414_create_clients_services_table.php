<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clients_id');
            $table->foreign('clients_id')->references('id')->on('clients');
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services');
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
        Schema::dropIfExists('clients_services');
    }
}
