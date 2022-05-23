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
        Schema::create('project_meetings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->string('title') ;
            $table->text('desc') ;
            $table->dateTime('date_from') ;
            $table->dateTime('date_to') ;
            $table->string('invite_user') ;
            $table->string('url_meeting') ;
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
        Schema::dropIfExists('project_meetings');
    }
};
