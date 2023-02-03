<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $supper_admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($supper_admin_permissions->pluck('id'));
        $admin_permissions = $supper_admin_permissions->filter(function ($permission) {
            $permissions_array = ['pharmacy_medicine_access','pharmacy_medicine_create','pharmacy_medicine_edit','pharmacy_medicine_update','pharmacy_medicine_show','pharmacy_medicine_delete',
                                  'pharmacy_customer_access','pharmacy_customer_create','pharmacy_customer_edit','pharmacy_customer_update','pharmacy_customer_show','pharmacy_customer_delete',
                                  'pharmacy_order_access','pharmacy_order_create','pharmacy_order_edit','pharmacy_order_update','pharmacy_order_show','pharmacy_order_delete'];
            return !in_array($permission->title, $permissions_array) && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($admin_permissions);


        $manager_permissions = $supper_admin_permissions->filter(function ($permission) {
            $manager_permissions_array = ['pharmacy_medicine_access','pharmacy_medicine_create','pharmacy_medicine_edit','pharmacy_medicine_update','pharmacy_medicine_show','pharmacy_medicine_delete',
            'pharmacy_customer_access','pharmacy_customer_create','pharmacy_customer_edit','pharmacy_customer_update','pharmacy_customer_show','pharmacy_customer_delete',
            'brand_access','brand_create','brand_edit','brand_update','brand_show','brand_delete',
            'medicines_category_access','medicines_category_create','medicines_category_edit','medicines_category_update','medicines_category_show','medicines_category_delete',
            'pharmacy_order_access','pharmacy_order_create','pharmacy_order_edit','pharmacy_order_update','pharmacy_order_show','pharmacy_order_delete'];
            return in_array($permission->title, $manager_permissions_array) && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(4)->permissions()->sync($manager_permissions);

    }
}
