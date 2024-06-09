<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothingItemsTable extends Migration
{
    public function up()
    {
        Schema::create('clothing_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->decimal('price', 8, 2);
            $table->string('brand');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clothing_items');
    }
}
