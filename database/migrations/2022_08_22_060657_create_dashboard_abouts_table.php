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
        Schema::create('dashboard_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('smallTitle');
            $table->text('descriptions1');
            $table->text('descriptions2');
            $table->string('fb')->nullable();
            $table->string('ln')->nullable();
            $table->string('ins')->nullable();
            $table->string('img')->nullable();
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
        Schema::dropIfExists('dashboard_abouts');
    }
};
