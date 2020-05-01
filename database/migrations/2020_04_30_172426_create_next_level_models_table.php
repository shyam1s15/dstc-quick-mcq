<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextLevelModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_level_models', function (Blueprint $table) {
            $table->id();
            $table->char('branch_subject', 50)->default('Engineering');
            $table->integer('passing')->unsigned()->nullable()->default(12);
            $table->text('passing_msg')->nullable()->default('Congratulations for passing');
            

            $table->integer('Elite')->unsigned()->nullable()->default(12);
            $table->text('Elite_msg')->nullable()->default('Congratulations for becoming Elite of all');

            $table->foreignId('app_id')
                ->constrained('appFormData')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('next_level_models');
    }
}
