<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cont = [
            'América',
            'Africa',
            'Europa',
            'Asia',
            'Oceania',
        ];
        foreach ($cont as $item) {
            Continent::create([
                'continent_name' => $item,
                'description' => 'No description',
            ]);
        }
    }
}
