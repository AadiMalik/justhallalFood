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
                'name'       => 'BIN SADIQ PHARMACY',
                'phone'       => '03120439820',
                'opening_time'       => '09:00:00',
                'closing_time'       => '24:00:00',
                'address'       => 'Zafar ul Haq Rd, Dhoke khabba, Rawalpindi, Punjab',
                'longitude'       => 33.61810108504421,
                'latitude'       => 73.07880764889357,
                'owner_id'       => 1,
            ],
            [
                'name'       => 'SADIQ PHARMACY',
                'phone'       => '03334329820',
                'opening_time'       => '09:00:00',
                'closing_time'       => '24:00:00',
                'address'       => ' Malik Market, Zafar-ul-Haq Rd, Glass Factory, Mohalla Chaudhry Hukamdad, Chah Sultan, Rawalpindi, Punjab',
                'longitude'       => 33.618326914681056,
                'latitude'       => 73.07971443012673,
                'owner_id'       => 4,
            ],
            [
                'name'       => 'AL_BASIT C & D PHARMACY',
                'phone'       => '03456739820',
                'opening_time'       => '24:00:00',
                'closing_time'       => '09:00:00',
                'address'       => ' Haq Nawaz Rd, New Amarpura Rd, Chah Sultan, Rawalpindi, Punjab',
                'longitude'       => 33.62066613643331,
                'latitude'       => 73.07640294953653,
                'owner_id'       => 5,
            ],

        ];
        foreach($pharmacies as $key => $pharmacy)
        {
            $pharmacy = Pharmacy::create($pharmacy);
        }
    }
}
