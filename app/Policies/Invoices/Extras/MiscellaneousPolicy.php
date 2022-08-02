<?php

namespace App\Policies\Invoices\Extras;

use App\Models\Users\User;
use App\Models\Invoices\Extras\Miscellaneous;
use Illuminate\Auth\Access\HandlesAuthorization;

class MiscellaneousPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Miscellaneous $miscellaneous)
    {
        //
    }
}