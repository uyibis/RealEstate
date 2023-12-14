<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            ['message' => "I'm overjoyed with the exceptional service! They made the entire home-buying process a breeze. Thank you!", 'name' => 'Sarah'],
            ['message' => 'Exceeded my expectations in finding the perfect property. Their dedication and professionalism are unmatched.', 'name' => 'Robert'],
            ['message' => 'An outstanding experience! The team was knowledgeable, patient, and truly cared about finding us the ideal home.', 'name' => 'Jessica'],
            ['message' => 'Highly recommend for their expertise and commitment. They turned our dream of homeownership into a reality!', 'name' => 'Michael Emily'],
            ['message' => 'Made selling our property stress-free and profitable. Their attention to detail and marketing strategies were impressive.', 'name' => 'David Lisa'],
            ['message' => 'Provided exceptional guidance through the buying process. Their expertise and personalized service made all the difference.', 'name' => 'Kimberly Mark'],
            ['message' => 'Went above and beyond to sell our house quickly. Their professionalism and marketing skills are top-notch!', 'name' => 'Brian and Megan'],
            ['message' => 'Truly understands the market. Their strategic approach and negotiation skills resulted in us getting our dream home at a great price.', 'name' => 'Amanda James'],
            ['message' => 'A huge thank you for making our relocation seamless. Local knowledge and attention to detail were invaluable.', 'name' => 'Richard Karen'],
            ['message' => 'Delivered exceptional service in helping us find our forever home. Commitment to client satisfaction sets them apart.', 'name' => 'Melissa John'],
            ['message' => 'Highly recommend for their integrity and professionalism. They were with us every step of the way, ensuring a smooth transaction.', 'name' => 'Thomas Laura'],
            ['message' => 'Made the selling process easy and stress-free. The team is reliable, and they exceeded our expectations.', 'name' => 'Christopher Rachel'],
            ['message' => 'Provided unmatched support during our home search. Responsiveness and knowledge were key to finding our perfect home.', 'name' => 'Daniel Emily'],
            ['message' => 'Helped us navigate the competitive market with ease. Personalized approach and expertise made all the difference.', 'name' => 'William Jennifer'],
            ['message' => 'Made selling our property a breeze. Marketing strategy and attention to detail showcased our home in the best light.', 'name' => 'Matthew Jessica'],
            ['message' => 'Is a team you can trust. Guided us through the entire buying process, ensuring a smooth transition to our new home.', 'name' => 'Jason Sarah'],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
