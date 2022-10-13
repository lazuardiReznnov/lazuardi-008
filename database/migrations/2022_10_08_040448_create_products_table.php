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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('merk_id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('descriptions');
            $table->string('pic')->nullable();
            $table->integer('dp')->nullable();
            $table->integer('three')->nullable();
            $table->integer('six')->nullable();
            $table->integer('week')->nullable();
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
        Schema::dropIfExists('products');
    }
};