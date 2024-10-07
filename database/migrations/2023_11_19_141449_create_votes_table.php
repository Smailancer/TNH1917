<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->decimal('percentage', 5, 2);
            $table->text('notes')->nullable();
            $table->boolean('public_vote')->default(false); 
            $table->boolean('downloaded')->default(false); 
            $table->boolean('sent_to_embassy')->default(false);
            $table->boolean('published_on_social_media')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });
        Schema::dropIfExists('votes');
    }
};
