<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('main_image')->nullable();
            $table->string('schema')->nullable();
            $table->text('additionally')->nullable();
            $table->boolean('rating')->default(0);
            $table->json('characteristics');
            $table->string('schema_additional')->nullable();
            $table->string('model');
            $table->string('schema_title')->nullable();
            $table->text('schema_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
