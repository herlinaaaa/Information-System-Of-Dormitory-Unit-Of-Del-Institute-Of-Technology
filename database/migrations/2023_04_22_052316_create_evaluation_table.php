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
        Schema::create('evaluation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->text('pesan');
            $table->enum('asrama', ['Rusun 1', 'Rusun 2', 'Rusun 3', 'Rusun 4', 'Pniel', 'Silo', 'Kapernaum', 'Danau Toba', 'Semua Asrama']);
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
        Schema::dropIfExists('evaluation');
    }
};
