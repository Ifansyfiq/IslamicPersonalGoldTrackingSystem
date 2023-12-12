<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permission for manage gold record
        $manageGoldRecordPermissions = [
            'list record',
            'view record',
            'create record',
            'update record',
            'delete record',
        ];

        // Define permission for manage pawnshop record
        $managePawnshopPermissions = [
            'list pawnshop',
            'view pawnshop',
            'create pawnshop',
            'update pawnshop',
            'delete pawnshop',
        ];

        $permissionArrays = [
            $manageGoldRecordPermissions,
            $managePawnshopPermissions,
        ];

        // Create all permissions
        foreach ($permissionArrays as $permissions) {
            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission]);
            }
        }

        // Create super admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'Super Admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }

        // Define roles with respective permissions
        $rolesAndPermissions = [
            'Admin' => array_merge(
                $managePawnshopPermissions
            ),
            'User' => array_merge(
                $manageGoldRecordPermissions,
                $managePawnshopPermissions
            ),
            'Pawnshop Owner' => array_merge(
                $managePawnshopPermissions
            ),
        ];

        // Create roles and assign permissions
        foreach ($rolesAndPermissions as $roleName => $permissions) {
            $flatPermissions = is_array($permissions) ? Arr::flatten($permissions) : [$permissions];
            $role = Role::create(['name' => $roleName]);
            $role->givePermissionTo(Permission::whereIn('name', $flatPermissions)->get());
        }

        // Assign roles to each test user
        $testUsers = [
            'admin@example.com' => 'Admin',
            'user@example.com' => 'User',
            'pawnshop@example.com' => 'Pawnshop Owner',
        ];

        foreach ($testUsers as $email => $role) {
            $user = User::whereEmail($email)->first();
            if ($user) {
                $user->assignRole($role);
            }
        }
    }
}
