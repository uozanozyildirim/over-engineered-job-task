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
        Schema::create('task_managers', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('developer_id');
            $table->integer('week_number');
            $table->integer('estimated_time_to_finish');
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
        Schema::dropIfExists('task_managers');
    }
};
