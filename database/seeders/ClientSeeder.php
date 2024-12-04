<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            'needs' => 'Digital Transformation',
            'duration' => '19',
            'compensation' => '1200000'
        ]);

        DB::table('clients')->insert([
            'needs' => 'Mergers and Acquisitions',
            'duration' => '24',
            'compensation' => '1500000'
        ]);

        DB::table('clients')->insert([
            'needs' => 'Operations and Performance',
            'duration' => '14',
            'compensation' => '700000'
        ]);

        DB::table('clients')->insert([
            'needs' => 'Sustainability',
            'duration' => '17',
            'compensation' => '900000'
        ]);
    }
}
