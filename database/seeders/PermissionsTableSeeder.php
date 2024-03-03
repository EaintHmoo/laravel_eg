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
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'branch_create',
            ],
            [
                'id'    => 20,
                'title' => 'branch_edit',
            ],
            [
                'id'    => 21,
                'title' => 'branch_show',
            ],
            [
                'id'    => 22,
                'title' => 'branch_delete',
            ],
            [
                'id'    => 23,
                'title' => 'branch_access',
            ],
            [
                'id'    => 24,
                'title' => 'brand_create',
            ],
            [
                'id'    => 25,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 26,
                'title' => 'brand_show',
            ],
            [
                'id'    => 27,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 28,
                'title' => 'brand_access',
            ],

            [
                'id'    => 30,
                'title' => 'customer_create',
            ],
            [
                'id'    => 31,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 32,
                'title' => 'customer_show',
            ],
            [
                'id'    => 33,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 34,
                'title' => 'customer_access',
            ],

        ];

        Permission::insert($permissions);
    }
}
