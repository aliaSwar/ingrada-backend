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
        Schema::create('orders', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('item_id')->nullable();
            $table->text('description')->nullable(); //description the customers
            $table->boolean('is_idea')->default(0);
            $table->boolean('is_accept')->default(0);
            $table->boolean('is_enternal')->default(0);
            $table->boolean('is_visual_identity')->default(0);
            $table->double('primary_price');
            $table->double('final_price');
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('scope')->nullable();
            $table->text('colors')->nullable();
            $table->integer('number_pages')->nullable();
            $table->text('fonts')->nullable();
            $table->string('pereferce')->nullable();
            $table->string('value')->nullable();
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            //TODO::is_order_designer
            $table->boolean('is_order_designer')->default(0);
            //TODO::designer_id
            $table->unsignedInteger('designer_id')->nullable();
            $table->foreignId('size_id')->nullable();
            $table->date('limit_date', 'y-m-d');
            $table->date('expected_limit_date', 'y-m-d')->nullable();//المتوقع
            $table->enum('status', ['Pendning','Initiated', 'Progress', 'Completed', 'Failed']);
            $table->text('notes')->nullable(); // notes the contect writer
            $table->tinyInteger('points')->nullable();
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
