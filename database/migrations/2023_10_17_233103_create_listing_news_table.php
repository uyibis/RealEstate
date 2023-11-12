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
        Schema::create('listing_news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300);
            $table->text('description');
            $table->float('price', 10, 2);
            $table->float('square_feet', 10, 2);
            $table->float('lot_size', 10, 2);
            $table->integer('bedroom');
            $table->integer('garage');
            $table->integer('bathroom');
            $table->string('city');
            $table->string('country');
            $table->text('media');
            $table->timestamps();
            $table->foreignId('realtor_id')->nullable()
                ->constrained()
                ->onDelete('cascade');
            $table-> enum('is_published',['0','1']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_news');
    }
};
