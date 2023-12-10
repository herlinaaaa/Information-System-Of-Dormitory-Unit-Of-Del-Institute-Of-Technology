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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nim')->unique();
            $table->string('name');
            $table->enum('prodi4', ['D3 TI', 'D3 TK', 'D4 TRPL', 'S1 SI', 'S1 IF', 'S1 TE', 'S1 MR', 'S1 BP']);
            $table->enum('gender', ['Perempuan', 'Laki-laki']);
            $table->string('akt');
            $table->enum('asrama', ['Rusun 1', 'Rusun 2', 'Rusun 3', 'Rusun 4', 'Pniel', 'Silo', 'Kapernaum', 'Danau Toba']);
            $table->string('kamar');
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
        Schema::dropIfExists('profil');
    }
};