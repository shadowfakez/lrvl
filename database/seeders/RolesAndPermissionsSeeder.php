<?php

namespace Database\Seeders;

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

        $role = Role::create(['name' => 'user']);
        $role = Role::create(['name' => 'admin']);

        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user@user',
            'password' => 'user',
        ]);

        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin',
            'password' => 'admin',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'App\Models\User',
            'model_id' => '1',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => '2',
            'model_type' => 'App\Models\User',
            'model_id' => '2',
        ]);



    }
}
