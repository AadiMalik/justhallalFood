<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'name'       => 'Getz',
            ],
            [
                'name'       => 'Pfizer',
            ],
            [
                'name'       => 'Test',
            ],
            [
                'name'       => 'Gsk',
            ],
            [
                'name'       => 'Searle',
            ],
        ];
        foreach($brands as $key => $brand)
        {
            $brand = Brand::create($brand);
        }
    }
}
