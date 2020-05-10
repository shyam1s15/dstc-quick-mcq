<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqResultsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_results_models', function (Blueprint $table) {
            $table->id();

            $table->foreign('app_id')->references('id')->on('appFormData')->onDelete('cascade');
            $table->foreign('s_id')->references('id')->on('new_students')->onDelete('cascade')->nullable();
            
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
        Schema::dropIfExists('mcq_results_models');
    }
}
