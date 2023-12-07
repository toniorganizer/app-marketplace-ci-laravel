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
        Schema::create('t_dbelis', function (Blueprint $table) {
            $table->id();
            $table->char('notransaksi', 10);
            $table->char('kodebrg', 10);
            $table->integer('hargabeli');
            $table->integer('qty');
            $table->integer('diskon');
            $table->integer('diskonrp');
            $table->integer('totalrp');
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
        Schema::dropIfExists('t_dbelis');
    }
};
