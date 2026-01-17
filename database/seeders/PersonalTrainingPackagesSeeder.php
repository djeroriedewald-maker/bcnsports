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
            'description' => 'Probeer vrijblijvend',
            'price' => 74.95,
            'price_per_session' => null,
            'period' => 'sessie',
            'features' => [
                '60 minuten training',
                'Persoonlijk trainingsplan',
                'Geen verplichtingen',
            ],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '5x Strippenkaart',
            'description' => 'Bespaar €25',
            'price' => 349.00,
            'price_per_session' => 69.80,
            'period' => 'sessie',
            'features' => [
                '5 sessies van 60 min',
                '3 maanden geldig',
                'Flexibel inplannen',
            ],
            'is_popular' => false,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '10x Strippenkaart',
            'description' => 'Bespaar €100',
            'price' => 649.00,
            'price_per_session' => 64.90,
            'period' => 'sessie',
            'features' => [
                '10 sessies van 60 min',
                '6 maanden geldig',
                'Voortgangsgesprekken',
            ],
            'is_popular' => true,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        PricingPackage::create([
            'category' => 'personal_1on1',
            'name' => '20 Sessies Traject',
            'description' => 'Beste waarde',
            'price' => 1199.00,
            'price_per_session' => 59.95,
            'period' => 'sessie',
            'features' => [
                '20 sessies van 60 min',
                '12 maanden geldig',
                'Volledige begeleiding',
            ],
            'is_popular' => false,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        // 1:2 Training (Duo)
        PricingPackage::create([
            'category' => 'duo',
            'name' => '1:2 Training',
            'description' => 'Train samen met een vriend, partner of collega. Dezelfde persoonlijke aanpak, maar dan met z\'n tweeen.',
            'price' => 54.95,
            'price_per_session' => null,
            'period' => 'persoon / sessie',
            'features' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Small Group Training
        PricingPackage::create([
            'category' => 'small_group',
            'name' => 'Small Group Training',
            'description' => 'Maximaal 4 deelnemers voor een dynamische training met persoonlijke aandacht. Ideaal voor vriendengroepen.',
            'price' => 39.95,
            'price_per_session' => null,
            'period' => 'persoon / sessie',
            'features' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Event Training
        PricingPackage::create([
            'category' => 'event',
            'name' => 'Event Training',
            'description' => 'Bereid je voor op Obstacle Runs, Mud Masters of andere sportieve evenementen met een traject op maat.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'traject',
            'features' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Milsim Training
        PricingPackage::create([
            'category' => 'milsim',
            'name' => 'Milsim Training',
            'description' => 'Fysieke voorbereiding voor airsoft milsim events. Focus op uithoudingsvermogen, kracht en tactische bewegingen.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'traject',
            'features' => [],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Bedrijfs-bootcamp
        PricingPackage::create([
            'category' => 'business',
            'name' => 'Bedrijfs-bootcamp',
            'description' => 'Teambuilding met impact. Outdoor training voor bedrijven die hun team willen uitdagen en versterken. Geschikt voor teamuitjes, incentives of structurele vitaliteitsprogramma\'s.',
            'price' => 0,
            'price_per_session' => null,
            'period' => 'offerte',
            'features' => [
                'Volledig op maat samengesteld',
                'Geschikt voor alle fitnessniveaus',
                'Op locatie naar keuze',
            ],
            'is_popular' => false,
            'sort_order' => 1,
            'is_active' => true,
        ]);
    }
}
