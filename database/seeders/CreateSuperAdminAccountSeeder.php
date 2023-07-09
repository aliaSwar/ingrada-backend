<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class CreateSuperAdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->where('email', '=', 'admin@admin.app')->doesntExist()) {
            $user=User::query()->create([
                'username' => 'super_admin',
                'slug' => 'super-admin',
                'fullname' => 'Super Admin',
                'is_super_admin' => true,
                'is_active' => true,
                'email' => 'admin@admin.app',
                'password' => "admin",
            ]);

            $user->save();
        }
    }
}
