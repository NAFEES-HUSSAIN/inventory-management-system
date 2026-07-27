<?php

use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Spatie\Permission\Models\Role;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);
    $this->seed(RoleSeeder::class);
});

test('role seeder creates administrator and employee roles', function () {
    expect(Role::query()->where('guard_name', 'web')->pluck('name')->sort()->values()->all())
        ->toBe(['Administrator', 'Employee']);
});

test('administrator receives all permissions', function () {
    $administrator = Role::findByName('Administrator', 'web');

    expect($administrator->permissions)->toHaveCount(42);
});

test('employee receives role matrix permissions only', function () {
    $employee = Role::findByName('Employee', 'web');

    expect($employee->permissions)->toHaveCount(11)
        ->and($employee->hasPermissionTo('dashboard.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('category.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('product.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('supplier.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('customer.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('purchase.create'))->toBeTrue()
        ->and($employee->hasPermissionTo('sale.create'))->toBeTrue()
        ->and($employee->hasPermissionTo('payment.create'))->toBeTrue()
        ->and($employee->hasPermissionTo('purchase.view'))->toBeTrue()
        ->and($employee->hasPermissionTo('product.create'))->toBeFalse()
        ->and($employee->hasPermissionTo('purchase.delete'))->toBeFalse()
        ->and($employee->hasPermissionTo('user.view'))->toBeFalse()
        ->and($employee->hasPermissionTo('report.view'))->toBeFalse()
        ->and($employee->hasPermissionTo('activity.view'))->toBeFalse();
});

test('role seeder is idempotent', function () {
    $this->seed(RoleSeeder::class);

    expect(Role::query()->count())->toBe(2)
        ->and(Role::findByName('Administrator', 'web')->permissions)->toHaveCount(42)
        ->and(Role::findByName('Employee', 'web')->permissions)->toHaveCount(11);
});
