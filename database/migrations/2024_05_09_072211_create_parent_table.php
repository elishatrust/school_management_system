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
        Schema::create('parent', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedInteger('role')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('archive')->default(0);
            $table->unsignedInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent');
    }
};
