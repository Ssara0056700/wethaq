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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cutomer_id');
            $table->unsignedBigInteger('proposal_id');
            $table->unsignedBigInteger('expert_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();          
            $table->string('type');
            $table->decimal('price');
            $table->enum('status',[0,1]);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
