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
        Schema::create('request_services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cutomer_id');
            $table->unsignedBigInteger('expert_id');
            $table->string('service_type');
            $table->unsignedBigInteger('category');
            $table->Text('description');
            $table->decimal('price');
            $table->enum('status',[0,1])->default(0);
            $table->text('admin_notes')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_services');
    }
};
