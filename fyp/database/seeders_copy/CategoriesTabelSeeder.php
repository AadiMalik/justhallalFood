<?php

namespace Database\Seeders;

use App\Models\MedicinesCategory;
use Illuminate\Database\Seeder;

class CategoriesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'       => 'Injection',
            ],
            [
                'name'       => 'Medicine',
            ],
            [
                'name'       => 'Bandages',
            ],
            [
                'name'       => 'Mask',
            ],
            [
                'name'       => 'Tablet',
                'parent_id' => 2
            ],
        ];
        foreach($categories as $key => $category)
        {
            $photo_id = $key+1;
            $category = MedicinesCategory::create($category);
            $category->addMedia(storage_path()."/seeders/categories/$photo_id.png")->preservingOriginal()->toMediaCollection('image');
        }
    }
}
