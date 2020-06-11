<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Text('type_consultation');
            $table->Text('tension');
            $table->Text('poids');
            $table->Text('temperature');
            $table->Text('date_consultation');
            $table->Text('nombre_enfant');
            $table->integer('patient_id');
            $table->integer('agentt_id');
            $table->String('description',500);
           
            
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        $table->foreign('agentt_id')->references('id')->on('agentts')->onDelete('cascade');
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
         Schema::table('consultations',function(Blueprint $table){
            $table->dropForeign('consultations_patient_id_foreign');
        });
        Schema::table('consultations',function(Blueprint $table){
            $table->dropForeign('consultations_agentt_id_foreign');
        });
        Schema::dropIfExists('consultations');
    }
}
