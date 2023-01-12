<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
        ->count(3)
        ->hasAuses(10)
        ->create();

        Category::factory()
        ->count(2)
        ->hasAuses(7)
        ->create();

        Category::factory()
        ->count(4)
        ->hasAuses(5)
        ->create();
    }
}
