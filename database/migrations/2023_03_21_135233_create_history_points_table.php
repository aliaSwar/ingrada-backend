<?php

declare(strict_types=1);

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
        Schema::create('history_points', function (Blueprint $table): void {
            //TODO:: points and history point should be redesign again
            $table->id();
            $table->foreignId('user_id');
            $table->date('added_points');
            $table->foreignId('point_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_points');
    }
};
