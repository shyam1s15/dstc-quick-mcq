<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_students', function (Blueprint $table) {
            $table->id();
            $table->text('full_name')->nullable();
            $table->text('qualification')->nullable();
            $table->text('seat_number')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('city')->nullable();
            $table->text('email')->nullable();
            $table->text('best_subject')->nullable();
            $table->integer('marks')->nullable();
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
        Schema::dropIfExists('new_students');
    }
}
