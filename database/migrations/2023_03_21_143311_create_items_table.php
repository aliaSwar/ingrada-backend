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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->comment('the design');
            $table->foreignId('scope_id');
            $table->foreignId('type_id');
            $table->foreignId('prefernce_id');
            $table->foreignId('prefernce_value_id')->nullable();
            $table->boolean('is_enable_post')->default(0);
            $table->unsignedBigInteger('likes');
            $table->double('price')->unsigned();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};