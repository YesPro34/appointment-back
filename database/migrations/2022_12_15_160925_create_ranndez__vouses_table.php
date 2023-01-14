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
        Schema::create('ranndez__vouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('service_id');
            $table->string('status')->default('upcoming');
            $table->text('comment')->nullable();
            $table->date('appointment_date');
            $table->time('appointment_time');
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
        Schema::dropIfExists('ranndez__vouses');
    }
};
