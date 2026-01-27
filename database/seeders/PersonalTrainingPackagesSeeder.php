<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingPackage;

class PersonalTrainingPackagesSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing packages
        PricingPackage::query()->delete();

        // 1:1 Personal Training packages
        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => 'Losse Sessie',
            'name_en' => 'Single Session',
            'description' => 'Probeer vrijblijvend',
            'description_en' => 'Try without commitment',
            'price' => 74.95,
            'price_per_session' => null,
            'period' => 'sessie',
            'period_en' => 'session',
            'features' => [
                '60 minuten training',
                'Persoonlijk trainingsplan',
                'Geen verplichtingen',
            ],
            'features_en' => [
                '60-minute training',
                'Personal training plan',
                'No commitments',
            ],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '5x Strippenkaart',
            'name_en' => '5-Session Pass',
            'description' => 'Bespaar €25',
            'description_en' => 'Save €25',
            'price' => 349.00,
            'price_per_session' => 69.80,
            'period' => 'sessie',
            'period_en' => 'session',
            'features' => [
                '5 sessies van 60 min',
                '3 maanden geldig',
                'Flexibel inplannen',
            ],
            'features_en' => [
                '5 sessions of 60 min',
                'Valid for 3 months',
                'Flexible scheduling',
            ],
            'is_popular' => false,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '10x Strippenkaart',
            'name_en' => '10-Session Pass',
            'description' => 'Bespaar €100',
            'description_en' => 'Save €100',
            'price' => 649.00,
            'price_per_session' => 64.90,
            'period' => 'sessie',
            'period_en' => 'session',
            'features' => [
                '10 sessies van 60 min',
                '6 maanden geldig',
                'Voortgangsgesprekken',
            ],
            'features_en' => [
                '10 sessions of 60 min',
                'Valid for 6 months',
                'Progress reviews',
            ],
            'is_popular' => true,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '20 Sessies Traject',
            'name_en' => '20-Session Program',
            'description' => 'Beste waarde',
            'description_en' => 'Best value',
            'price' => 1199.00,
            'price_per_session' => 59.95,
            'period' => 'sessie',
            'period_en' => 'session',
            'features' => [
                '20 sessies van 60 min',
                '12 maanden geldig',
                'Volledige begeleiding',
            ],
            'features_en' => [
                '20 sessions of 60 min',
                'Valid for 12 months',
                'Full coaching support',
            ],
            'is_popular' => false,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        // 1:2 Training (Duo)
        PricingPackage::create([
            'category' => 'duo',
            'name' => '1:2 Training',
            'name_en' => '1:2 Training',
            'description' => 'Train samen met een vriend, partner of collega. Dezelfde persoonlijke aanpak, maar dan met z\'n tweeen.',
            'description_en' => 'Train together with a friend, partner or colleague. The same personal approach, but as a duo.',
            'price' => 54.95,
            'price_per_session' => null,
            'period' => 'persoon / sessie',
            'period_en' => 'person / session',
            'features' => [],
            'features_en' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Small Group Training
        PricingPackage::create([
            'category' => 'small_group',
            'name' => 'Small Group Training',
            'name_en' => 'Small Group Training',
            'description' => 'Minimaal 3, maximaal 4 deelnemers voor een dynamische training met persoonlijke aandacht. Ideaal voor vriendengroepen.',
            'description_en' => 'Minimum 3, maximum 4 participants for a dynamic training with personal attention. Ideal for groups of friends.',
            'price' => 39.95,
            'price_per_session' => null,
            'period' => 'persoon / sessie',
            'period_en' => 'person / session',
            'features' => [],
            'features_en' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Event Training
        PricingPackage::create([
            'category' => 'event',
            'name' => 'Event Training',
            'name_en' => 'Event Training',
            'description' => 'Bereid je voor op Obstacle Runs, Mud Masters of andere sportieve evenementen met een traject op maat.',
            'description_en' => 'Prepare for Obstacle Runs, Mud Masters or other sporting events with a custom training program.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'traject',
            'period_en' => 'program',
            'features' => [],
            'features_en' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Bootcamp Trials (milsim category)
        PricingPackage::create([
            'category' => 'milsim',
            'name' => 'Bootcamp Trials',
            'name_en' => 'Bootcamp Trials',
            'description' => 'Uitdagende outdoor events waar je mentale en fysieke grenzen verlegt. Events worden aangekondigd op de website.',
            'description_en' => 'Challenging outdoor events where you push your mental and physical limits. Events are announced on the website.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'event',
            'period_en' => 'event',
            'features' => [],
            'features_en' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Bedrijfs-bootcamp
        PricingPackage::create([
            'category' => 'business',
            'name' => 'Bedrijfs-bootcamp',
            'name_en' => 'Corporate Bootcamp',
            'description' => 'Teambuilding met impact. Outdoor training voor bedrijven die hun team willen uitdagen en versterken. Geschikt voor teamuitjes, incentives of structurele vitaliteitsprogramma\'s.',
            'description_en' => 'Teambuilding with impact. Outdoor training for companies that want to challenge and strengthen their team. Suitable for team outings, incentives or structural vitality programs.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'offerte',
            'period_en' => 'quote',
            'features' => [
                'Volledig op maat samengesteld',
                'Geschikt voor alle fitnessniveaus',
                'Op locatie naar keuze',
            ],
            'features_en' => [
                'Fully customized',
                'Suitable for all fitness levels',
                'At a location of your choice',
            ],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);
    }
}
