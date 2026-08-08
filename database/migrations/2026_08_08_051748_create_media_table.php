<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            // File Information
            $table->string('file_name');
            $table->string('file_path');
            $table->string('file_type')->nullable();
            $table->string('extension', 10)->nullable();
            $table->unsignedBigInteger('file_size')->nullable();

            // Image Dimensions
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();

            // SEO
            $table->string('title')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('caption')->nullable();
            $table->text('description')->nullable();
            $table->string('focus_keyword')->nullable();

            // Status
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
