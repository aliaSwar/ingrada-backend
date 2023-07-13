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
        Schema::create('tasks', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('status', ['Initiated', 'Progress' ,'Test', 'Fix', 'Completed']);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('real_end_date');
            $table->time('tasks_hour')->nullable();//TODO::search type time
            $table->foreignId('user_id');
            $table->foreignId('order_id');
            $table->string('type');
            //manager_id
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
