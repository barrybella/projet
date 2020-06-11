<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendeVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rende_vouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agentt_id');
            $table->integer('service_id');
            $table->integer('horairess_id');
            $table->integer('patient_id');
            $table->foreign('agentt_id')->references('id')->on('agentts')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('horairess_id')->references('id')->on('horairesses')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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

         Schema::table('rende_vouses',function(Blueprint $table){
            $table->dropForeign('rende_vouses_agentt_id_foreign');
        });

         Schema::table('rende_vouses',function(Blueprint $table){
            $table->dropForeign('rende_vouses_service_id_foreign');
        });

         Schema::table('rende_vouses',function(Blueprint $table){
            $table->dropForeign('rende_vouses_horairess_id_foreign');
        });

         Schema::table('rende_vouses',function(Blueprint $table){
            $table->dropForeign('rende_vouses_patient_id_foreign');
        });
        Schema::dropIfExists('rende_vouses');
    }
}
