<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['White', 'Black','Red','Green','Yellow','Blue','Pink','Purple'];
        foreach ($colors as $key => $color) {
            Color::create([
                'name' => $color
            ]);
        }
    }
}
