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
        Schema::create('property_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId('property_id'); // This will store the ID of the associated property (listing, building, or apartment)
            $table->enum('property_type', ['land', 'building', 'apartment']);
            $table-> enum('is_published',['0','1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_entries');
    }
};
