<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonances', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('consultation_id');
            $table->string('date');
              $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
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
         Schema::table('ordonances',function(Blueprint $table){
            $table->dropForeign('ordonances_patient_id_foreign');
        });
        Schema::table('ordonances',function(Blueprint $table){
            $table->dropForeign('ordonances_agentt_id_foreign');
        });
        Schema::dropIfExists('ordonances');
    }
}
