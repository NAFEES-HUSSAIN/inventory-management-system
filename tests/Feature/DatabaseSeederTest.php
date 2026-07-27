<?php

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

test('database seeder seeds permissions roles and administrator', function () {
    $this->seed(DatabaseSeeder::class);

    expect(Permission::query()->count())->toBe(42)
        ->and(Role::query()->pluck('name')->sort()->values()->all())->toBe(['Administrator', 'Employee'])
        ->and(User::query()->where('email', 'admin@example.com')->count())->toBe(1)
        ->and(User::query()->where('email', 'test@example.com')->exists())->toBeFalse()
        ->and(User::query()->where('email', 'admin@example.com')->first()->hasRole('Administrator'))->toBeTrue();
});
