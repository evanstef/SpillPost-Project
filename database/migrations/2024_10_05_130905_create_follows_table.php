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
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->uuid('follower_id');  // Pengikut (user yang follow)
            $table->uuid('following_id'); // Diikuti (user yang diikuti)


             // Index untuk mempercepat pencarian
             $table->index('follower_id');
             $table->index('following_id');

             // Foreign keys
             $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('following_id')->references('id')->on('users')->onDelete('cascade');

             // Untuk mencegah user follow orang yang sama lebih dari sekali
             $table->unique(['follower_id', 'following_id']);
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
