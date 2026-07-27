<?php

use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Support\Facades\Hash;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);
    $this->seed(RoleSeeder::class);
});

test('admin user seeder creates the administrator account', function () {
    $this->seed(AdminUserSeeder::class);

    $user = User::query()->where('email', 'admin@example.com')->first();

    expect($user)->not->toBeNull()
        ->and($user->name)->toBe('Administrator')
        ->and(Hash::check('password', $user->password))->toBeTrue()
        ->and($user->hasRole('Administrator'))->toBeTrue();
});

test('admin user seeder is idempotent', function () {
    $this->seed(AdminUserSeeder::class);
    $this->seed(AdminUserSeeder::class);

    expect(User::query()->where('email', 'admin@example.com')->count())->toBe(1)
        ->and(User::query()->where('email', 'admin@example.com')->first()->hasRole('Administrator'))->toBeTrue();
});
