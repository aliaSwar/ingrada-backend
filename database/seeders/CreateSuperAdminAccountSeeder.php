<?php

namespace Database\Seeders;

use App\Models\Category;
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
            $user=User::query()->create([
                'username' => 'super_admin',
                'slug' => 'super-admin',
                'fullname' => 'Super Admin',
                'is_super_admin' => true,
                'is_active' => true,
                'email' => 'admin@admin.app',
                'password' => "admin",
            ]);
<<<<<<< HEAD
            User::query()->create([
                'username' => 'Alia',
                'slug' => 'alia',
                'fullname' => 'Alia Swar',
                'is_super_admin' => false,
                'is_active' => true,
                'email' => 'alia@alia.app',
                'password' => "admin",
                'category'=> Category::CATEGORY_CONTENT_WRITER_SMALL,
                'number_tasks'=>3,
            ]);
=======
            $user->assignRole('admin');
            $user->save();
>>>>>>> d39dd2ea1530f9c0612783ca706d3e24e398874e
        }
    }
}
