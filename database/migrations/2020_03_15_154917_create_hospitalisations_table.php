<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('consultation_id');
             $table->integer('lit_id');
             $table->string('date_debut');
             $table->string('date_fin');
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            $table->foreign('lit_id')->references('id')->on('lits')->onDelete('cascade');
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

          Schema::table('hospitalisations',function(Blueprint $table){
            $table->dropForeign('hospitalisations_consultation_id_foreign');
        });
           Schema::table('hospitalisations',function(Blueprint $table){
            $table->dropForeign('hospitalisations_lit_id_foreign');
        });
        Schema::dropIfExists('hospitalisations');
    }
}
