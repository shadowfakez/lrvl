<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'supervisor']);
        $role3 = Role::create(['name' => 'manager']);
        $role4 = Role::create(['name' => 'user']);


        $user = User::factory()->create([
            'name' => "admin",
            'email' => 'admin@admin.admin',
            'password' => Hash::make('admin'),
            ]);

        $user->assignRole($role1);

        $user = User::factory()->create([
            'name' => "supervisor",
            'email' => 'supervisor@supervisor.supervisor',
            'password' => Hash::make('supervisor'),
        ]);

        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => "manager",
            'email' => 'manager@manager.manager',
            'password' => Hash::make('manager'),
        ]);

        $user->assignRole($role3);


    }
}
