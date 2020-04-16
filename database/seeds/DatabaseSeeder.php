<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 1)->create([
       	'name' => 'user',
        'email' => 'admin@approveitsa.inglobe.com.ar',
        'email_verified_at' => now(),
        'password' => Hash::make('inglobe2018'), // secret
        'remember_token' => str_random(10),
       ]);
    }
}
