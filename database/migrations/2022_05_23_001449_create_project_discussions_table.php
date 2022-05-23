<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_discussions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->string('list_name');
            $table->string('title');
            $table->text('desc');
            $table->string('up_file');
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
        Schema::dropIfExists('project_discussions');
    }
};
