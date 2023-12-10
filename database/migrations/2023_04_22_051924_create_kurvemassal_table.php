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
        Schema::create('kurvemassal', function (Blueprint $table) {
            $table->id();
            $table->enum('prodi3', ['D3 TI','D3 TK','D4 TRPL','S1 SI','S1 IF','S1 TE','S1 MR','S1 BP']);
            $table->string('angkatan');
            $table->string('lokasi');
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
        Schema::dropIfExists('kurvemassal');
    }
};
