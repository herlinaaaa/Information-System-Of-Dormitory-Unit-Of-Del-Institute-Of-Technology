<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurveharian', function (Blueprint $table) {
            $table->id();
            $table->string('user_nim');
            $table->string('asrama');
            $table->enum('jadwal', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->text('tugas');
            $table->timestamps();

            $table->foreign('user_nim')->references('nim')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurveharian');
    }
};