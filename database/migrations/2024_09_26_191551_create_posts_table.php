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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('content')->nullable();
            $table->text('description');
            $table->enum('status', ['published', 'not_published']);
            $table->foreignId('category_id')->constrained('post_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->boolean('comments_enabled')->default(false);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
