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
        Schema::create('storefronts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('metric');
            $table->integer('floor');
            $table->string('sanitary');
            $table->boolean('available');
            $table->boolean('visible');
            $table->float('buyPrice');
            $table->float('rentPrice');
            $table->mediumText('points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storefronts');
    }
};
