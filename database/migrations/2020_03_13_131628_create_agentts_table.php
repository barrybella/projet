<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentts', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->Text('nom');
            $table->Text('prenom');
           $table->Text('date_naissance');
          $table->Text('lieu_naissance');
        $table->Text('genre');
          $table->string('email',50)->unique();
        $table->Text('quartier');
          $table->Text('telephone');
          $table->Text('photo');
          $table->integer('service_id');
        $table->integer('type_agent_id');
        $table->integer('specialite_id');
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        $table->foreign('type_agent_id')->references('id')->on('type_agents')->onDelete('cascade');
         $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');
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
        Schema::table('agentts',function(Blueprint $table){
            $table->dropForeign('agentts_service_id_foreign');
        });
        Schema::table('agentts',function(Blueprint $table){
            $table->dropForeign('agentts_type_agent_id_foreign');
        });
        Schema::table('agentts',function(Blueprint $table){
            $table->dropForeign('agentts_sepcialiste_id_foreign');
        });
        Schema::dropIfExists('agentts');
    }
}
