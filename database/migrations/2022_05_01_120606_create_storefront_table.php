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
        Schema::create('storefront', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('metric');
            $table->integer('floor');
            $table->string('sanitary');
            $table->boolean('available');
            $table->float('buyPrice');
            $table->float('rentPrice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storefront');
    }
};
