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
        // Events Migration
        Schema::create('events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->string('event_name');
            $table->date('event_date');
            $table->string('event_location');
            $table->string('event_folder')->nullable();
            $table->string('cover_image_path')->nullable();
        });

        // Event Images Migration
        Schema::create('event_images', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->foreignId('event_id')
                ->constrained('events')
                ->cascadeOnDelete();
            $table->string('display_image_path');
            $table->string('download_image_path');
            $table->string('image_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
        Schema::dropIfExists('event_images');
    }
};
