<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class MedicinesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicines = [
            [
                'name'       => 'Cataflam',
                'description'       => 'Cataflam (diclofenac) is a non-steroidal anti-inflammatory drug (NSAID). Diclofenac works by reducing substances in the body that cause pain and inflammation.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => '9.24',

            ],
            [
                'name'       => 'Amaryl 1mg',
                'description'       => 'Amaryl (glimepiride) is an oral diabetes medicine that helps control blood sugar levels.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 1,
                'price'       => ' 7.83',

            ],

        ];
        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.png")->preservingOriginal()->toMediaCollection('image');
        }

        $medicines = [
            [
                'name'       => 'Cataflam',
                'description'       => 'Cataflam (diclofenac) is a non-steroidal anti-inflammatory drug (NSAID). Diclofenac works by reducing substances in the body that cause pain and inflammation.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => '9.24',

            ],
            [
                'name'       => 'Amaryl 1mg',
                'description'       => 'Amaryl (glimepiride) is an oral diabetes medicine that helps control blood sugar levels.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 3,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ],

        ];
        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.png")->preservingOriginal()->toMediaCollection('image');
        }

        $medicines = [
            [
                'name'       => 'Cataflam',
                'description'       => 'Cataflam (diclofenac) is a non-steroidal anti-inflammatory drug (NSAID). Diclofenac works by reducing substances in the body that cause pain and inflammation.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => '9.24',

            ],
            [
                'name'       => 'Amaryl 1mg',
                'description'       => 'Amaryl (glimepiride) is an oral diabetes medicine that helps control blood sugar levels.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 3,
                'brand_id'       => 4,
                'price'       => ' 7.83',

            ],

        ];
        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.png")->preservingOriginal()->toMediaCollection('image');
        }
    }
}
