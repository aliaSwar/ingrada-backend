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
            $table->foreignId('item_id')->nullable();
            $table->text('description')->nullable(); //description the customers
            $table->boolean('is_idea')->default(0);
            $table->boolean('is_accept')->default(0);
            $table->boolean('is_enternal')->default(false);
            $table->double('primary_price');
            $table->double('final_sprice');
            $table->string('type');
            $table->string('scope');
            $table->json('colors');
            $table->json('fonts');
            $table->string('pereferce');
            $table->json('value');
            $table->string('file');
            //TODO::is_order_designer
            $table->boolean('is_order_designer')->default(0);
            //TODO::designer_id
            $table->unsignedInteger('designer_id')->nullable();
            $table->unsignedDouble('size')->nullable();
            $table->date('limit_date', 'y-m-d');
            $table->date('expected_limit_date', 'y-m-d');//المتوقع
            $table->enum('status', ['Ordered','Initiated', 'InProgress', 'Completed', 'Failed']);
            $table->text('notes')->nullable(); // notes the contect writer
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