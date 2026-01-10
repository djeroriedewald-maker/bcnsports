<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\PricingPackage;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // Pricing Packages
        PricingPackage::create([
            'name' => 'Solo Bootcamp Pass',
            'description' => 'Onbeperkt trainen',
            'price' => 39.95,
            'period' => 'maand',
            'features' => [
                'Onbeperkt bootcamp lessen',
                'Professionele begeleiding',
                'Flexibel opzegbaar',
                'Toegang tot alle locaties',
            ],
            'is_popular' => true,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'name' => 'Family Package',
            'description' => 'Tot 4 personen',
            'price' => 59.95,
            'period' => 'maand',
            'features' => [
                'Tot 4 personen onbeperkt',
                'Alle bootcamp lessen',
                'Professionele begeleiding',
                'Samen sporten, samen groeien',
                'Beste prijs per persoon!',
            ],
            'is_popular' => false,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'name' => '10-Rittenkaart',
            'description' => 'Flexibel trainen',
            'price' => 99.00,
            'period' => '10 lessen',
            'features' => [
                '10 bootcamp lessen',
                '6 maanden geldig',
                'Ideaal voor beginners',
                '€9,90 per les',
            ],
            'is_popular' => false,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'name' => 'Losse Les',
            'description' => 'Probeer vrijblijvend',
            'price' => 12.50,
            'period' => 'les',
            'features' => [
                '1 bootcamp les',
                'Geen verplichtingen',
                'Perfect om te proberen',
                'Reserveer online',
            ],
            'is_popular' => false,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        // FAQs
        Faq::create([
            'question' => 'Kan ik eerst een proefles doen?',
            'answer' => 'Ja, je eerste proefles is helemaal gratis! Meld je aan via ons lesrooster en maak een profiel aan - je ontvangt automatisch een gratis credit voor je eerste les. Zo kun je vrijblijvend ervaren of BCN Sports bij je past.',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Faq::create([
            'question' => 'Hoe werkt het Family pakket?',
            'answer' => 'Met het Family pakket kunnen tot 4 personen (gezinsleden of vrienden) onbeperkt deelnemen aan alle bootcamp lessen. Iedereen traint onder hetzelfde abonnement maar kan op eigen tijden reserveren.',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Faq::create([
            'question' => 'Hoe lang is de 10-rittenkaart geldig?',
            'answer' => 'De 10-rittenkaart is 6 maanden geldig vanaf de datum van aankoop. Dit geeft je voldoende flexibiliteit om de lessen in te plannen.',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        Faq::create([
            'question' => 'Kan ik mijn abonnement pauzeren?',
            'answer' => 'Ja, bij langere afwezigheid (vakantie, blessure) kun je je abonnement tijdelijk pauzeren. Neem contact met ons op om de mogelijkheden te bespreken.',
            'sort_order' => 4,
            'is_active' => true,
        ]);

        Faq::create([
            'question' => 'Wat is de opzegtermijn?',
            'answer' => 'Onze abonnementen zijn flexibel opzegbaar met een opzegtermijn van 1 maand. Je kunt opzeggen per de eerste van de volgende maand.',
            'sort_order' => 5,
            'is_active' => true,
        ]);

        // Testimonials
        Testimonial::create([
            'name' => 'Marieke V.',
            'role' => 'Lid sinds 2023',
            'content' => 'BCN Sports heeft mijn leven veranderd! De trainingen zijn uitdagend maar toegankelijk, en de sfeer is geweldig.',
            'rating' => 5,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Familie De Jong',
            'role' => 'Family Package',
            'content' => 'Het family pakket is perfect voor ons gezin. We trainen samen en het is een geweldige manier om quality time door te brengen.',
            'rating' => 5,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Thomas K.',
            'role' => 'Bootcamp deelnemer',
            'content' => 'Na 3 maanden bootcamp ben ik 8 kilo afgevallen en voel ik me fitter dan ooit. Bedankt BCN Sports!',
            'rating' => 5,
            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
