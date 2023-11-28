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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode');
            $table->string('nama');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir',);
            $table->date('tanggal_lahir');
            $table->string('telepon');
            $table->text('alamat');
            $table->string('foto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
