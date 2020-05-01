<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppFormMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appFormData', function (Blueprint $table) {
            $table->id();
            $table->char('app_head', 80)->default('DSTC FORMS');
            $table->char('title1', 40)->default('Title1');
            $table->char('title2', 40)->default('Title2');
            $table->date('created_at')->nullable();
            $table->date('finish_at')->nullable();
            $table->char('created_by', 40)->default('professor');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appFormData');
    }
}
