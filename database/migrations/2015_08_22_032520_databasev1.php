<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Databasev1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('artikel', function($table)
        {
            $table->increments('id');
            $table->string('judul');
            $table->binary('konten');
            $table->date('tanggal');
            $table->binary('gambar');
            $table->string('kategori');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('news', function($table)
        {
            $table->increments('id');
            $table->string('judul');
            $table->binary('konten');
            $table->date('tanggal');
            $table->binary('gambar');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('event', function($table)
        {
            $table->increments('id');
            $table->string('judul', 255)->nullable();
            $table->string('konten', 1000)->nullable();
            $table->date('tanggal');
            $table->string('hasil')->nullable();
            $table->softDeletes();
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
        Schema::drop('artikel');
        Schema::drop('event');
    }
}
