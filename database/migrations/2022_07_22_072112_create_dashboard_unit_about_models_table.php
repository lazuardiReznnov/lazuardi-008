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
        Schema::create('dashboard_unit_about_models', function (
            Blueprint $table
        ) {
            $table->id();
            $table->string('title');
            $table->string('stitle');
            $table->string('email')->unique();
            $table->string('fb')->nullable();
            $table->string('ins')->nullable();
            $table->string('lnkn')->nullable();
            $table->text('address')->nullable();
            $table->text('img')->nullable();
            $table->text('desk1')->nullable();
            $table->text('desk2')->nullable();
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
        Schema::dropIfExists('dashboard_unit_about_models');
    }
};
