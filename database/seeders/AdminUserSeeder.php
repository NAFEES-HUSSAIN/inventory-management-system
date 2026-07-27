<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    private const GUARD = 'web';

    private const ROLE = 'Administrator';

    /**
     * Seed the default administrator account.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole($this->administratorRole());
    }

    private function administratorRole(): Role
    {
        return Role::findByName(self::ROLE, self::GUARD);
    }
}
