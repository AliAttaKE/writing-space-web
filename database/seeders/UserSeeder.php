<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $account_id = 'ID-' . rand(1000, 99999999);
        // Example users
        $users = [
            [
                'name' => 'Admin 1',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'account_id' => $account_id,
                'role' => 'admin',
                'api_role' => 'admin',
                'verified' => 1,
                'status' => 1
            ],
            [
                'name' => 'Admin 2',
                'email' => 'writingspaceapi@gmail.com',
                'password' => Hash::make('1234'),
                'account_id' => $account_id,
                'role' => 'admin',
                'api_role' => 'api',
                'verified' => 1,
                'status' => 1
            ],

            [
                'name' => 'Regular customer 1',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('1234'),
                'account_id' => $account_id,
                'role' => 'customer',
                'api_role' => 'admin',
                'verified' => 1,
                'status' => 1
            ],
            [
                'name' => 'Regular customer 2',
                'email' => 'customer2@gmail.com',
                'password' => Hash::make('1234'),
                'account_id' => $account_id,
                'role' => 'customer',
                'api_role' => 'admin',
                'verified' => 1,
                'status' => 1
            ],

        ];

        // Create users and assign roles
        foreach ($users as $userData) {
            $account_id = 'ID-' . rand(1000, 99999999);

            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'account_id' => $account_id,
                'role' => $userData['role'],
                'api_role' => $userData['api_role'],
                 'verified' => $userData['verified'],
                 'status' => $userData['status'],
            ]);
        }

        $admin1 = User::findOrFail(1);
        $admin1->assignRole('admin');
        $admin2 = User::findOrFail(2);
        $admin2->assignRole('admin');

        $customer1 = User::findOrFail(3);
        $customer1->assignRole('customer');
        $customer2 = User::findOrFail(4);
        $customer2->assignRole('customer');

    }

}
