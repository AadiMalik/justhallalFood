<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'brand_create',
            ],
            [
                'id'    => 18,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 19,
                'title' => 'brand_show',
            ],
            [
                'id'    => 20,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 21,
                'title' => 'brand_access',
            ],
            [
                'id'    => 22,
                'title' => 'medicines_category_create',
            ],
            [
                'id'    => 23,
                'title' => 'medicines_category_edit',
            ],
            [
                'id'    => 24,
                'title' => 'medicines_category_show',
            ],
            [
                'id'    => 25,
                'title' => 'medicines_category_delete',
            ],
            [
                'id'    => 26,
                'title' => 'medicines_category_access',
            ],
            [
                'id'    => 27,
                'title' => 'medicine_create',
            ],
            [
                'id'    => 28,
                'title' => 'medicine_edit',
            ],
            [
                'id'    => 29,
                'title' => 'medicine_show',
            ],
            [
                'id'    => 30,
                'title' => 'medicine_delete',
            ],
            [
                'id'    => 31,
                'title' => 'medicine_access',
            ],
            [
                'id'    => 32,
                'title' => 'customer_detail_create',
            ],
            [
                'id'    => 33,
                'title' => 'customer_detail_edit',
            ],
            [
                'id'    => 34,
                'title' => 'customer_detail_show',
            ],
            [
                'id'    => 35,
                'title' => 'customer_detail_delete',
            ],
            [
                'id'    => 36,
                'title' => 'customer_detail_access',
            ],
            [
                'id'    => 37,
                'title' => 'order_show',
            ],
            [
                'id'    => 38,
                'title' => 'order_delete',
            ],
            [
                'id'    => 39,
                'title' => 'order_access',
            ],
            [
                'id'    => 40,
                'title' => 'pharmacy_create',
            ],
            [
                'id'    => 41,
                'title' => 'pharmacy_edit',
            ],
            [
                'id'    => 42,
                'title' => 'pharmacy_show',
            ],
            [
                'id'    => 43,
                'title' => 'pharmacy_delete',
            ],
            [
                'id'    => 44,
                'title' => 'pharmacy_access',
            ],
            [
                'id'    => 45,
                'title' => 'covid_post_create',
            ],
            [
                'id'    => 46,
                'title' => 'covid_post_edit',
            ],
            [
                'id'    => 47,
                'title' => 'covid_post_show',
            ],
            [
                'id'    => 48,
                'title' => 'covid_post_delete',
            ],
            [
                'id'    => 49,
                'title' => 'covid_post_access',
            ],
            [
                'id'    => 50,
                'title' => 'pharmacy_medicine_create',
            ],
            [
                'id'    => 51,
                'title' => 'pharmacy_medicine_edit',
            ],
            [
                'id'    => 52,
                'title' => 'pharmacy_medicine_show',
            ],
            [
                'id'    => 53,
                'title' => 'pharmacy_medicine_delete',
            ],
            [
                'id'    => 54,
                'title' => 'pharmacy_medicine_access',
            ],
            [
                'id'    => 55,
                'title' => 'pharmacy_customer_create',
            ],
            [
                'id'    => 56,
                'title' => 'pharmacy_customer_edit',
            ],
            [
                'id'    => 57,
                'title' => 'pharmacy_customer_show',
            ],
            [
                'id'    => 58,
                'title' => 'pharmacy_customer_delete',
            ],
            [
                'id'    => 59,
                'title' => 'pharmacy_customer_access',
            ],
            [
                'id'    => 60,
                'title' => 'pharmacy_order_create',
            ],
            [
                'id'    => 61,
                'title' => 'pharmacy_order_edit',
            ],
            [
                'id'    => 62,
                'title' => 'pharmacy_order_show',
            ],
            [
                'id'    => 63,
                'title' => 'pharmacy_order_delete',
            ],
            [
                'id'    => 64,
                'title' => 'pharmacy_order_access',
            ],
            [
                'id'    => 65,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
