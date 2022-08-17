<?php

namespace Database\Seeders\Users;

use App\Models\Users\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line('         <bg=cyan;fg=white> PROC </> Creating user details.');
        $this->command->newLine();

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

        $this->command->line('         <bg=green;fg=white> DONE </> Creating user details.');
        $this->command->newLine();
    }
}
