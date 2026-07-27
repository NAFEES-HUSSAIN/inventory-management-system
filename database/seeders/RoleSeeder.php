<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    private const GUARD = 'web';

    /**
     * Seed system roles and sync permissions from the Role Matrix.
     */
    public function run(): void
    {
        $this->createRole('Administrator', $this->allPermissions());
        $this->createRole('Employee', $this->employeePermissions());
    }

    /**
     * @param  Collection<int, Permission>|list<Permission>  $permissions
     */
    private function createRole(string $name, Collection|array $permissions): Role
    {
        $role = Role::firstOrCreate([
            'name' => $name,
            'guard_name' => self::GUARD,
        ]);

        $role->syncPermissions($permissions);

        return $role;
    }

    /**
     * @return Collection<int, Permission>
     */
    private function allPermissions(): Collection
    {
        return Permission::query()
            ->where('guard_name', self::GUARD)
            ->get();
    }

    /**
     * View catalog modules; create purchases, sales, and payments.
     *
     * @return Collection<int, Permission>
     */
    private function employeePermissions(): Collection
    {
        return $this->permissionsFromMap([
            'dashboard' => ['view'],
            'category' => ['view'],
            'product' => ['view'],
            'supplier' => ['view'],
            'customer' => ['view'],
            'purchase' => ['view', 'create'],
            'sale' => ['view', 'create'],
            'payment' => ['view', 'create'],
        ]);
    }

    /**
     * @param  array<string, list<string>>  $permissionMap
     * @return Collection<int, Permission>
     */
    private function permissionsFromMap(array $permissionMap): Collection
    {
        $names = [];

        foreach ($permissionMap as $module => $actions) {
            foreach ($actions as $action) {
                $names[] = "{$module}.{$action}";
            }
        }

        return Permission::query()
            ->where('guard_name', self::GUARD)
            ->whereIn('name', $names)
            ->get();
    }
}
