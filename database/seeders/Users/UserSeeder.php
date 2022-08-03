<?php

namespace Database\Seeders\Users;

use App\Models\Users\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'username'          => 'juanmcortez',
            'firstName'         => 'Juan',
            'middleName'        => 'M.',
            'lastName'          => 'Cortéz',
            'email'             => 'juanm.cortez@gmail.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$BXXW4PjUEvXH5.7LEoWfRuvjE5SnGSY8qCR.QHYAzdrUCoMjdysyS', // 123456789
            'remember_token'    => Str::random(10),
        ]);
    }
}
