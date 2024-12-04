<?php

namespace Database\Seeders;

use App\Models\Consultant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
        ]);

        Consultant::factory()->count(20)->create();
    }
}
