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
            $table->unsignedBigInteger('property_id'); // This will store the ID of the associated property (listing, building, or apartment)
            $table->enum('property_type', ['land', 'building', 'apartment']);

            // Add any additional columns for the property entry as needed

            $table->timestamps();

            // Define foreign key constraint for property_id and property_type
            $table->foreign('property_id')->references('id')->on('listing_apartments')
                ->onUpdate('cascade')->onDelete('cascade')->where('property_type', 'apartment');
//            $table->foreign('property_type')->references('type')->on('listing_apartments')
//                ->onUpdate('cascade')->onDelete('cascade');

            // Define foreign key constraints for "building" property type
            $table->foreign('property_id')->references('id')->on('listing_buildings')
                ->onUpdate('cascade')->onDelete('cascade')->where('property_type', 'building');
//            $table->foreign('property_type')->references('type')->on('buildings')
//                ->onUpdate('cascade')->onDelete('cascade')->where('property_type', 'building');

            // Define foreign key constraints for "apartment" property type
            $table->foreign('property_id')->references('id')->on('listing_lands')
                ->onUpdate('cascade')->onDelete('cascade')->where('property_type', 'land');
//            $table->foreign('property_type')->references('type')->on('apartments')
//                ->onUpdate('cascade')->onDelete('cascade')->where('property_type', 'apartment');

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
