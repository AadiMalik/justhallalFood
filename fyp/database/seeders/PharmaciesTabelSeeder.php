<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use Illuminate\Database\Seeder;

class PharmaciesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pharmacies = [
            [
                'name'       => 'Makkah Pharmacy',
                'phone'       => '03120439820',
                'opening_time'       => '09:00:00',
                'closing_time'       => '24:00:00',
                'address'       => 'Wah Link Road, Phase 2 New City, Wah, New City Phase II Wah Cantt, Attock, Punjab 47040, Pakistan',
                'longitude'       => 33.73968869321495,
                'latitude'       => 72.72651866705093,
                'owner_id'       => 4,
            ],
            [
                'name'       => 'SADIQ PHARMACY',
                'phone'       => '03334329820',
                'opening_time'       => '09:00:00',
                'closing_time'       => '24:00:00',
                'address'       => ' Malik Market, Zafar-ul-Haq Rd, Glass Factory, Mohalla Chaudhry Hukamdad, Chah Sultan, Rawalpindi, Punjab',
                'longitude'       => 33.618326914681056,
                'latitude'       => 73.07971443012673,
                'owner_id'       => 5,
            ],
            [
                'name'       => 'Shani pharma ',
                'phone'       => '03456739820',
                'opening_time'       => '24:00:00',
                'closing_time'       => '09:00:00',
                'address'       => ' Phase 2 Wah Model Town, Rawalpindi, Punjab, Pakistan',
                'longitude'       => 33.74031351358714,
                'latitude'       => 72.72995020590874,
                'owner_id'       => 6,
            ],

        ];
        foreach($pharmacies as $key => $pharmacy)
        {
            $pharmacy = Pharmacy::create($pharmacy);
        }
    }
}
