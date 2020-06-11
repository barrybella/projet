<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonanceProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonance_produit', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->integer('produit_id')->index()->unsigned();
            $table->foreign('produit_id')->references('produits')->on('id');
            $table->integer('ordonance_id')->index()->unsigned();
            $table->foreign('ordonance_id')->references('ordonances')->on('id');
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
        Schema::dropIfExists('ordonance_produit');
    }
}
