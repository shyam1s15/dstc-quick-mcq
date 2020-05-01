<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormQuestionMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formQuestions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')
                ->constrained('appFormData')
                ->onDelete('cascade');

            $table->foreignId('level_id')
                ->constrained('next_level_models')
                ->onDelete('cascade')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formQuestions');
    }
}
