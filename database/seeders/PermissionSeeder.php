<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Seed all module permissions defined in the Permission Matrix.
     */
    public function run(): void
    {
        $this->resetPermissionCache();

        foreach ($this->permissions() as $module => $actions) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    'name' => "{$module}.{$action}",
                    'guard_name' => 'web',
                ]);
            }
        }

        $this->resetPermissionCache();
    }

    /**
     * @return array<string, list<string>>
     */
    private function permissions(): array
    {
        return [
            'dashboard' => [
                'view',
            ],
            'category' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'product' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'supplier' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'customer' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'purchase' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'sale' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'payment' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'report' => [
                'view',
                'export',
            ],
            'user' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'role' => [
                'view',
                'create',
                'update',
                'delete',
            ],
            'permission' => [
                'view',
                'assign',
            ],
            'activity' => [
                'view',
            ],
        ];
    }

    private function resetPermissionCache(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
