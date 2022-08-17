<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseClone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:clone';


    /**
     * Hidden command from artisan menu.
     *
     * @var boolean
     */
    protected $hidden = true;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Use this command to clone an existing DB from the old system, to the new system. The old DB connection needs to be setup on the env file.';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->newLine();
        $this->alert('Runing cloning process.');

        $this->line('  <bg=blue;fg=white> INFO </> Refreshing database tables.');
        $this->newLine();

        $this->callSilently('migrate:refresh');

        $this->line('  <bg=blue;fg=white> INFO </> Process the DB to clone.');
        $this->newLine();

        $this->call('db:seed', ['class' => 'Database\Seeders\Users\UserSeeder']);

        $this->call('db:seed', ['class' => 'Database\Seeders\Patients\PatientClonerSeeder']);

        $this->alert('Runing cloning process.');

        return 0;
    }
}
