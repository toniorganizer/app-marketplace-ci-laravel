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
        Schema::create('t_barangs', function (Blueprint $table) {
            $table->id();
            $table->char('kodebrg', 10);
            $table->char('namabrg', 100);
            $table->char('satuan', 10);
            $table->integer('hargabeli');
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
        Schema::dropIfExists('t_barangs');
    }
};
