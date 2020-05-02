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
            $table->foreignId('app_id')
                ->constrained('appFormData')
                ->onDelete('cascade');

            $table->unsignedBigInteger('level_id')->nullable();
            
            $table->foreign('level_id')->references('id')->on('next_level_models')->onDelete('cascade');
            

            $table->longText('question')->nullable()->default('It is a question');
            
            $table->text('option1')->nullable();
            $table->text('option2')->nullable();
            $table->text('option3')->nullable();
            $table->text('option4')->nullable();

            $table->char('ans', 10)->default('NO');
            
            $table->text('img_directory')->nullable();         
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
