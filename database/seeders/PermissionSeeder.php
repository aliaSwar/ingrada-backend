<?php

namespace Database\Seeders;

use App\Concerns\HasDefaultPermission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    use HasDefaultPermission;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->permissions() as $permission) {
          Role::create(['name'=>$permission]);
        }
    }
}
