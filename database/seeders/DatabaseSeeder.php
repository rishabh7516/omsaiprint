<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::updateOrCreate(
            ['email' => 'ashokimp71@gmail.com'],
            ['name' => 'Ashok Singh', 'password' => bcrypt('admin123456')]
        );

        // 2. Populate 6 Core Industry Sectors
        $sectors = [
            [
                'name' => 'Cosmetic & Personal Care',
                'slug' => 'cosmetic-personal-care',
                'description' => 'Precision screen printing for shampoo, conditioner, serum droppers, and luxury lotion bottles with high-gloss and metallic inks.',
                'image' => '/images/cosmetic-shampoo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baby & Feeding Bottles',
                'slug' => 'baby-feeding-bottles',
                'description' => 'Chemical-resistant, non-toxic measurement scales and ergonomic prints for infant feeding bottles, sippy cups, and tumblers.',
                'image' => '/images/baby-feeding.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paint Stainers & Tinting Colourants',
                'slug' => 'paint-stainers-tinting-colourants',
                'description' => 'Solvent-proof and squeeze-durable volume markings for paint stainer and tinting colourant squeeze bottles.',
                'image' => '/images/paint-stainer.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Industrial, Lubricants & Adhesives',
                'slug' => 'industrial-lubricants-adhesives',
                'description' => 'Heavy-duty screen printing resistant to harsh oils, chemicals, and industrial fluids on HDPE containers.',
                'image' => '/images/industrial-oil.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Food & Household',
                'slug' => 'food-household',
                'description' => 'Food-safe screen printing for condiment squeeze bottles, sauce containers, and household cleaning products.',
                'image' => '/images/food-sauce.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Machine Photos',
                'slug' => 'machine-photos',
                'description' => 'Showcase of automatic multi-color silk-screen printing lines, UV curing setups, and precision tooling.',
                'image' => '/images/machine-line.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($sectors as $sector) {
            DB::table('sectors')->updateOrInsert(['slug' => $sector['slug']], $sector);
        }
    }
}