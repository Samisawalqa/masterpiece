<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\FieldImage;
use App\Models\Reservation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(12)->create();
        Field::factory(12)->create();
        FieldImage::factory(12)->create();
        Reservation::factory(12)->create();
    }
}
