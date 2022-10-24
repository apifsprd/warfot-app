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
        Schema::create('mdpakets', function (Blueprint $table) {
            $table->id();
            $table->string('namapaket');
            $table->integer('harga');
            $table->integer('jmlproduk');
            $table->integer('jmlphoto');
            $table->boolean('editing')->default(false);
            $table->string('file');
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
        Schema::dropIfExists('mdpakets');
    }
};
