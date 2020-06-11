<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorairessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horairesses', function (Blueprint $table) {
            $table->bigIncrements('id'); $table->integer('jours_semaine_id');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->foreign('jours_semaine_id')->references('id')->on('jours_semaines')->onDelete('cascade');
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
         Schema::table('horairesses',function(Blueprint $table){
            $table->dropForeign('horaires_jours_semaine_id_foreign');
        });
        Schema::dropIfExists('horairesses');
    }
}
