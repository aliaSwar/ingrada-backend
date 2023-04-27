<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateSuperAdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->where('email', '=', 'admin@admin.app')->doesntExist()) {
            User::query()->create([
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
}