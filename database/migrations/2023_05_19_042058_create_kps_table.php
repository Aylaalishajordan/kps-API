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
        Schema::create('kps', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->max(100);
            $table->string('nis')->max(8);
            $table->string('JK');
            $table->integer('AK')->max(2);
            $table->text('alamat');
            $table->string('status')->max(20);
            $table->string('tanggal_lahir');
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
        Schema::dropIfExists('kps');
    }
};