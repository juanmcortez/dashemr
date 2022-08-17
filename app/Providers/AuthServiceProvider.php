<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Patients\Patient'               => 'App\Policies\Patients\PatientPolicy',
        'App\Models\Patients\Demographic'           => 'App\Policies\Patients\DemographicPolicy',
        'App\Models\Invoices\Encounter'             => 'App\Policies\Invoices\EncounterPolicy',
        'App\Models\Invoices\Extras\Problem'        => 'App\Policies\Invoices\Extras\ProblemPolicy',
        'App\Models\Invoices\Extras\Miscellaneous'  => 'App\Policies\Invoices\Extras\MiscellaneousPolicy',
        'App\Models\Invoices\Extras\Lab'            => 'App\Policies\Invoices\Extras\LabPolicy',
        'App\Models\Invoices\Charge'                => 'App\Policies\Invoices\ChargePolicy',
        'App\Models\Invoices\Extras\Anesthesia'     => 'App\Policies\Invoices\Extras\AnesthesiaPolicy',
        'App\Models\Invoices\Extras\SpecialCode'    => 'App\Policies\Invoices\Extras\SpecialCodePolicy',
        'App\Models\Doctors\Referring'              => 'App\Policies\Doctors\ReferringPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
