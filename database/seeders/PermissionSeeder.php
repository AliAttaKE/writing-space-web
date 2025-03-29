<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $groupPermissions = [
            ['group_name' => 'Administrator Access', 'permissions' => ['aa_parha_karo', 'aa_likha_karo', 'aa_banaya_karo']],
            ['group_name' => 'User Management', 'permissions' => ['um_parha_karo', 'um_likha_karo', 'um_banaya_karo']],
            ['group_name' => 'Content Management', 'permissions' => ['cm_parha_karo', 'cm_likha_karo', 'cm_banaya_karo']],
            ['group_name' => 'Financial Management', 'permissions' => ['fm_parha_karo', 'fm_likha_karo', 'fm_banaya_karo']],
            ['group_name' => 'Reporting', 'permissions' => ['r_parha_karo', 'r_likha_karo', 'r_banaya_karo']],
            ['group_name' => 'Payroll', 'permissions' => ['p_parha_karo', 'p_likha_karo', 'p_banaya_karo']],
            ['group_name' => 'Disputes Management', 'permissions' => ['parha_karo', 'likha_karo', 'banaya_karo']],
            ['group_name' => 'API Controls', 'permissions' => ['api_parha_karo', 'api_likha_karo', 'api_banaya_karo']],
            ['group_name' => 'Database Management', 'permissions' => ['dm_parha_karo', 'dm_likha_karo', 'dm_banaya_karo']],
            ['group_name' => 'Repository Management', 'permissions' => ['rm_parha_karo', 'rm_likha_karo', 'rm_banaya_karo']],
        ];

        foreach ($groupPermissions as $group) {
            foreach ($group['permissions'] as $permission) {
                $permissionName = str_replace(' ', '_', $permission); // Replace spaces with underscores
                Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => 'web', // Adjust the guard name if needed
                    'group_name' => $group['group_name']
                ]);
            }
        }







    }
}
