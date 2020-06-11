<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatsExamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats_examents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('exament_id');
            $table->foreign('exament_id')->references('id')->on('examents')->onDelete('cascade');
             $table->string('description',800);
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
        Schema::table('resultats_examents',function(Blueprint $table){
            $table->dropForeign('resultats_examents_exament_id_foreign');
        });
        Schema::dropIfExists('resultats_examents');
    }
}
