<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_levels', function (Blueprint $table) {
            $table->id();
            $table->foreign('result_id')->references('id')->on('mcq_results_models')->onDelete('cascade');

            $table->text('branch_subject')->nullable();
            $table->integer("marks")->nullable();
            
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
        Schema::dropIfExists('result_levels');
    }
}
