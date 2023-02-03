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
                'name'       => 'Ciproxin 250mg(tablet) ',
                'description'       => 'Archromegaly,short term treatement before pituitary surgery,chronic prostatitis,gl infection,urinary tract infection,skin infection',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => '25.0',

            ],
            [
                'name'       => 'Azomax 250mg(capsule)',
                'description'       => 'Lower respiratory tract infection,Multiple Myeloma,Skin and Soft tissue infection,',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 250.0',

            ],[
                'name'       => 'Treviamet 50mg/500mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 150.0',

            ]
            ,[
                'name'       => 'Getryl 1mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 87.0',

            ]
            ,[
                'name'       => 'Daonil 5mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 102.0',

            ] ,[
                'name'       => 'Glucophage 850mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 135.0',

            ],[
                'name'       => 'Concor 2.5mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial,Hyper tension,Cardiac arrhythmia',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 26.0',

            ]
            ,[
                'name'       => 'Exforge 5mg/160mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 200.0',

            ]
            ,[
                'name'       => 'Tamsolin 0.4mg',
                'description'       => 'urinary tract infection (UTI).',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 430.0',

            ]
            ,[
                'name'       => 'Hydryllin',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 100.0',

            ]
            ,[
                'name'       => 'Acefyl',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 44.0',

            ] ,[
                'name'       => 'Panadol',
                'description'       => 'used when person have headache including migraine and tension headaches, toothache, backache',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 27.0',

            ],[
                'name'       => 'Artifen 25mg',
                'description'       => 'NDICATED FOR TREATMENT OF PAIN AND INFLAMMATION IN RHEUMATOID ARTHRITIS',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'price'       => ' 56.0',

            ],
            [
                'name'       => 'Disprine',
                'description'       => 'is used to provide relief from headache, migraine, toothache, period pains, rheumatic and arthritic pain.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ]
           , [
                'name'       => 'Xanax 0.5mg',
                'description'       => 'is used to treat anxiety and panic disorders.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 1,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ], [
                'name'       => 'Rocephin 250mg',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 1,
                'brand_id'       => 1,
                'price'       => ' 57.0',

            ]

            , [
                'name'       => 'Sulzon',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 1,
                'brand_id'       => 2,
                'price'       => ' 120.0',

            ]
            , [
                'name'       => 'n95 mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 1,
                'brand_id'       => 2,
                'price'       => ' 150.0',

            ] , [
                'name'       => 'simple mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 1,
                'brand_id'       => 2,
                'price'       => ' 20.0',

            ], [
                'name'       => 'Bandage',
                'description'       => 'Bandages',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 3,
                'pharmacy_id'       => 1,
                'brand_id'       => 2,
                'price'       => ' 40.0',

            ]

        ];
        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.jpg")->preservingOriginal()->toMediaCollection('image');
        }

        $medicines = [
            [
                'name'       => 'Ciproxin 250mg(tablet) ',
                'description'       => 'Archromegaly,short term treatement before pituitary surgery,chronic prostatitis,gl infection,urinary tract infection,skin infection',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => '25.0',

            ],
            [
                'name'       => 'Azomax 250mg(capsule)',
                'description'       => 'Lower respiratory tract infection,Multiple Myeloma,Skin and Soft tissue infection,',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 250.0',

            ],[
                'name'       => 'Treviamet 50mg/500mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 150.0',

            ]
            ,[
                'name'       => 'Getryl 1mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 87.0',

            ]
            ,[
                'name'       => 'Daonil 5mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 102.0',

            ] ,[
                'name'       => 'Glucophage 850mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 135.0',

            ],[
                'name'       => 'Concor 2.5mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial,Hyper tension,Cardiac arrhythmia',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 26.0',

            ]
            ,[
                'name'       => 'Exforge 5mg/160mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 200.0',

            ]
            ,[
                'name'       => 'Tamsolin 0.4mg',
                'description'       => 'urinary tract infection (UTI).',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 430.0',

            ]
            ,[
                'name'       => 'Hydryllin',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 100.0',

            ]
            ,[
                'name'       => 'Adicos',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 44.0',

            ] ,[
                'name'       => 'Panadol',
                'description'       => 'used when person have headache including migraine and tension headaches, toothache, backache',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 27.0',

            ],[
                'name'       => 'Artifen 25mg',
                'description'       => 'NDICATED FOR TREATMENT OF PAIN AND INFLAMMATION IN RHEUMATOID ARTHRITIS',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'price'       => ' 56.0',

            ],
            [
                'name'       => 'Disprine',
                'description'       => 'is used to provide relief from headache, migraine, toothache, period pains, rheumatic and arthritic pain.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ]
           , [
                'name'       => 'Xanax 0.5mg',
                'description'       => 'is used to treat anxiety and panic disorders.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 2,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ]
            , [
                'name'       => 'Rocephin 250mg',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 2,
                'brand_id'       => 1,
                'price'       => ' 57.0',

            ]

            , [
                'name'       => 'Sulzon',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 2,
                'brand_id'       => 2,
                'price'       => ' 120.0',

            ]
            , [
                'name'       => 'n95 mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 2,
                'brand_id'       => 2,
                'price'       => ' 150.0',

            ] , [
                'name'       => 'simple mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 2,
                'brand_id'       => 2,
                'price'       => ' 20.0',

            ], [
                'name'       => 'Bandage',
                'description'       => 'Bandages',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 3,
                'pharmacy_id'       => 2,
                'brand_id'       => 2,
                'price'       => ' 40.0',

            ]

        ];


        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.jpg")->preservingOriginal()->toMediaCollection('image');
        }

        $medicines = [
            [
                'name'       => 'Ciproxin 250mg(tablet) ',
                'description'       => 'Archromegaly,short term treatement before pituitary surgery,chronic prostatitis,gl infection,urinary tract infection,skin infection',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => '25.0',

            ],
            [
                'name'       => 'Azomax 250mg(capsule)',
                'description'       => 'Lower respiratory tract infection,Multiple Myeloma,Skin and Soft tissue infection,',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 250.0',

            ],[
                'name'       => 'Treviamet 50mg/500mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 150.0',

            ]
            ,[
                'name'       => 'Getryl 1mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 87.0',

            ]
            ,[
                'name'       => 'Daonil 5mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 102.0',

            ] ,[
                'name'       => 'Glucophage 850mg',
                'description'       => 'Diabetis',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 135.0',

            ],[
                'name'       => 'Concor 2.5mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial,Hyper tension,Cardiac arrhythmia',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 26.0',

            ]
            ,[
                'name'       => 'Exforge 5mg/160mg',
                'description'       => 'Blood pressure,Angina,Heart failor,Arterial.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 200.0',

            ]
            ,[
                'name'       => 'Tamsolin 0.4mg',
                'description'       => 'urinary tract infection (UTI).',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 430.0',

            ]
            ,[
                'name'       => 'Hydryllin',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 100.0',

            ]
            ,[
                'name'       => 'Acefyl',
                'description'       => 'Cough syrup',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 44.0',

            ] ,[
                'name'       => 'Panadol',
                'description'       => 'used when person have headache including migraine and tension headaches, toothache, backache',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 27.0',

            ],[
                'name'       => 'Artifen 25mg',
                'description'       => 'NDICATED FOR TREATMENT OF PAIN AND INFLAMMATION IN RHEUMATOID ARTHRITIS',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'price'       => ' 56.0',

            ],
            [
                'name'       => 'Disprine',
                'description'       => 'is used to provide relief from headache, migraine, toothache, period pains, rheumatic and arthritic pain.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ]
           , [
                'name'       => 'Xanax 0.5mg',
                'description'       => 'is used to treat anxiety and panic disorders.',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 2,
                'pharmacy_id'       => 3,
                'brand_id'       => 1,
                'price'       => ' 7.83',

            ], [
                'name'       => 'Rocephin 250mg',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 3,
                'brand_id'       => 1,
                'price'       => ' 57.0',

            ]

            , [
                'name'       => 'Sulzon',
                'description'       => 'injections',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 1,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => ' 120.0',

            ]
            , [
                'name'       => 'n95 mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => ' 150.0',

            ] , [
                'name'       => 'simple mask',
                'description'       => 'Mask',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 4,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => ' 20.0',

            ], [
                'name'       => 'Bandage',
                'description'       => 'Bandages',
                'in_stock'       => true,
                'expiry_date'       => now()->addYear(rand(3, 6))->format(config('panel.date_format')),
                'category_id'       => 3,
                'pharmacy_id'       => 3,
                'brand_id'       => 2,
                'price'       => ' 40.0',

            ]

        ];
        foreach($medicines as $key => $medicine)
        {
            $photo_id = $key+1;
            $medicine = Medicine::create($medicine);
            $medicine->addMedia(storage_path()."/seeders/medicines/$photo_id.jpg")->preservingOriginal()->toMediaCollection('image');
        }
    }
}
