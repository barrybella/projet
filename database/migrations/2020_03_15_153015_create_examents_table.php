<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('consultation_id');
            $table->integer('agentt_id');
             $table->integer('type_exament_id');
              $table->string('date_consultation');
              $table->foreign('agentt_id')->references('id')->on('agentts')->onDelete('cascade');
        $table->foreign('type_exament_id')->references('id')->on('type_examents')->onDelete('cascade');
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
        Schema::table('examents',function(Blueprint $table){
            $table->dropForeign('examents_agent_id_foreign');
        });
        Schema::table('examents',function(Blueprint $table){
            $table->dropForeign('examents_type_exament_id_foreign');
        });
        Schema::table('examents',function(Blueprint $table){
            $table->dropForeign('examents_consultation_id_foreign');
        });
        Schema::dropIfExists('examents');
    }
}
