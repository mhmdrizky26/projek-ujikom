<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin'
            ], $default_user_value));
            $petugas = User::create(array_merge([
                'email' => 'petugas@gmail.com',
                'name' => 'petugas'
            ], $default_user_value));

            $role = Role::create([ 'name' => 'admin']);
            $role = Role::create([ 'name' => 'petugas']);

            $permission = Permission::create([ 'name' =>'read role']);
            $permission = Permission::create([ 'name' =>'create role']);
            $permission = Permission::create([ 'name' =>'update role']);
            $permission = Permission::create([ 'name' =>'delete role']);

            $admin -> assignRole('admin');
            $admin -> assignRole('petugas');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}