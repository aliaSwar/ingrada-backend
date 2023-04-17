<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'super admin',
            'slug' => 'super-admin',
            'fullname' => 'Super Admin',
            'is_super_admin' => true,
            'is_active' => true,
            'email' => 'admin@admin.app',
            'password' => defaultHashedPassword(),
        ]);
    }
}
