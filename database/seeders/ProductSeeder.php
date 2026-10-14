<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(40)->create();
        Product::factory()->count(5)->withoutDescription()->create();
        Product::factory()->count(5)->outOfStock()->create();
    }
}
