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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id');
            $table->foreignId('item_id');
            $table->text('description')->nullable(); //description the customers
            $table->boolean('is_idea')->default(0);
            $table->boolean('is_accept')->default(0);
            $table->boolean('is_enternal')->default(false);
            $table->double('primary_price');
            $table->double('final_price');
            $table->string('type');
            $table->string('scope');
            $table->json('colors');
            $table->json('fonts');
            $table->string('file');
            //TODO::is_order_designer
            //TODO::id_designer
            $table->date('limit_date', 'y-m-d');
            $table->enum('status', ['Initiated', 'InProgress', 'Completed', 'Failed']);
            $table->text('notes'); // notes the contect writer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
