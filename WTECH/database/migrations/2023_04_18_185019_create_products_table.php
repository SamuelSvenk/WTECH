<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title")->unique();
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->float("price")->nullable();
            $table->float("quantity")->nullable();
            $table->string("platform")->nullable();
            $table->text("more_info")->nullable();
            $table->text("system_requirements")->nullable();
            $table->datetime("release_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
