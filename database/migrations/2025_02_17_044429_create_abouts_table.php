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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('description_history');
            $table->text('description_vision');
            $table->text('description_mission1');
            $table->text('description_mission2');
            $table->text('description_mission3');
            $table->text('description_ceo');
            $table->text('description_secretary');
            $table->text('description_treasurer');
            $table->text('description_supervisor');
            $table->text('description_member1');
            $table->text('description_member2');
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
        Schema::dropIfExists('abouts');
    }
};