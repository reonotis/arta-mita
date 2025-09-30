<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => '藤澤 怜臣',
            'email' => 'fujisawa@reonotis.jp',
            'password' => Hash::make('password'),
        ]);
    }
}
