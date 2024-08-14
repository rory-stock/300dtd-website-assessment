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
        Schema::create('event', function (Blueprint $table) {
            $table->id() -> autoIncrement();
            $table->string('EventName');
            $table->date('EventDate');
            $table->string('EventLocation');
            $table->string('EventFolder');
            $table->string('CoverImage') -> nullable();
        });

        // Event images table
        Schema::create('event_images', function (Blueprint $table) {
            $table->id() -> autoIncrement();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('event');
        Schema::dropIfExists('event_images');
    }
};
