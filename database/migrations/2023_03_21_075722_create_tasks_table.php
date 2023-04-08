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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('status', ['Initiated', 'Progress'.'Test', 'Fix', 'Completed']);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('real_end_date');
            $table->foreignId('user_id');
            $table->string('category'); //تسند من جدول اصناف اليوزر الى صنف التاسك
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
