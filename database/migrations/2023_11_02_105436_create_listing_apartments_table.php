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
        Schema::create('listing_apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('kitchen');
            $table->string('city');
            $table->string('country');
            $table->string('area');
            $table->text('media');
            $table->foreignId('realtor_id')->nullable()
                ->constrained()
                ->onDelete('cascade');
            $table-> enum('is_published',['0','1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_apartments');
    }
};
