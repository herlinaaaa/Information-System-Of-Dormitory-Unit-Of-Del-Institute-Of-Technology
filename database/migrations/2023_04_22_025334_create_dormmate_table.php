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

        Schema::create('dormmate', function (Blueprint $table) {
            $table->id();
            $table->string('user_nim');
            $table->enum('gender', ['Perempuan', 'Laki-laki']);
            $table->enum('asrama', ['Rusun 1', 'Rusun 2', 'Rusun 3', 'Rusun 4', 'Pniel', 'Silo', 'Kapernaum', 'Danau Toba']);
            $table->string('kamar');
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
        Schema::dropIfExists('dormmate');
    }
};