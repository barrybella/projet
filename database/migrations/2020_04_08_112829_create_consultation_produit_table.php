<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_produit', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->integer('produit_id')->index()->unsigned();
            $table->foreign('produit_id')->references('produits')->on('id');
            $table->integer('consultation_id')->index()->unsigned();
            $table->foreign('consultation_id')->references('consultations')->on('id');
             $table->string('quantite');
              $table->string('utilisation');
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
        Schema::dropIfExists('consultation_produit');
    }
}
