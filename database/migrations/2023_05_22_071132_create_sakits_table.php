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
        Schema::create('sakits', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('kelas');
            $table->string('date');
            $table->string('pesan');
            $table->text('dmk');
            $table->enum('penanganan', ['Menunggu', 'Izin', 'Ditolak'])->default('Menunggu');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('sakits');
    }
};
