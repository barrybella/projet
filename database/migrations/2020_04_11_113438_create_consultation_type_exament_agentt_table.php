<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationTypeExamentAgenttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_type_exament_agentt', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('type_exament_id')->index()->unsigned();
              $table->integer('agentt_id')->index()->unsigned();
            $table->foreign('type_exament_id')->references('type_examents')->on('id');
              $table->foreign('agentt_id')->references('agentts')->on('id');
            $table->integer('consultation_id')->index()->unsigned();
            $table->foreign('consultation_id')->references('consultations')->on('id');
            $table->string('date');
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
        Schema::dropIfExists('consultation_type_exament_agentt');
    }
}