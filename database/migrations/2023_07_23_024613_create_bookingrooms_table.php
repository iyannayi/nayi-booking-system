<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookingrooms', function (Blueprint $table) {
            $table->bigIncrements('br_id');
            $table->unsignedBigInteger('br_user_id');
            $table->unsignedBigInteger('br_room_id');
            $table->string('br_name');            
            $table->string('br_purpose');
            $table->string('br_participants');
            $table->date('br_date');
            $table->enum('br_slot', ['morning', 'evening']);
            $table->integer('br_status');
            $table->date('br_datestatus')->nullable();
            $table->string('br_description')->nullable();
            $table->timestamps();

            $table->foreign('br_user_id')->references('id')->on('users');
            $table->foreign('br_room_id')->references('r_id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingrooms');
    }
};
