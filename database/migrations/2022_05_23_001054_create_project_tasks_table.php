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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_list_id');
            $table->bigInteger('project_milestone_id');
            $table->string('sub_task');
            $table->string('filter_task');
            $table->string('assignment');
            $table->string('comment');
            $table->dateTime('date_from');
            $table->dateTime('due_to');
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
        Schema::dropIfExists('project_tasks');
    }
};
