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
        Schema::create('note_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('note_id');
            $table->unsignedBigInteger('attribute_id');
            $table->string('value');
            $table->timestamps();

            // 定義外鍵關聯至notes表的note_id
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');

            // 定義外鍵關聯至attributes表的attribute_id
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_attributes');
    }
};
