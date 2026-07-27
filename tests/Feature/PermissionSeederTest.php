<?php

use Database\Seeders\PermissionSeeder;
use Spatie\Permission\Models\Permission;

test('permission seeder creates all forty two matrix permissions', function () {
    $this->seed(PermissionSeeder::class);

    expect(Permission::query()->where('guard_name', 'web')->count())->toBe(42);

    expect(Permission::query()->where('name', 'product.create')->where('guard_name', 'web')->exists())->toBeTrue()
        ->and(Permission::query()->where('name', 'report.export')->where('guard_name', 'web')->exists())->toBeTrue()
        ->and(Permission::query()->where('name', 'permission.assign')->where('guard_name', 'web')->exists())->toBeTrue()
        ->and(Permission::query()->where('name', 'activity.view')->where('guard_name', 'web')->exists())->toBeTrue();
});

test('permission seeder is idempotent', function () {
    $this->seed(PermissionSeeder::class);
    $this->seed(PermissionSeeder::class);

    expect(Permission::query()->count())->toBe(42);
});
