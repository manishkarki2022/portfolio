<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('nepal123'),
            'role' => 'admin',
            'is_active' => true,
            'bio' => 'Site administrator',
            'phone' => '1234567890',
            'address' => 'Kathmandu, Nepal',
            'social_links' => json_encode([
                'facebook' => 'https://facebook.com',
                'linkedin' => 'https://linkedin.com'
            ])
        ]);
    }
}
