<?php

namespace App\Policies\Invoices\Extras;

use App\Models\Users\User;
use App\Models\Invoices\Extras\SpecialCode;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecialCodePolicy
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
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SpecialCode $specialCode)
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
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SpecialCode $specialCode)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SpecialCode $specialCode)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, SpecialCode $specialCode)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, SpecialCode $specialCode)
    {
        //
    }
}
