<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'ادمین اصلی',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'کاربر تست',
            'email' => 'user@example.com',
            'password' => Hash::make('user1234'),
            'role' => 'user',
        ]);
    }
}
