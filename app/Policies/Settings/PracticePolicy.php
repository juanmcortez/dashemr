<?php

namespace App\Policies\Settings;

use App\Models\Users\User;
use App\Models\Settings\Practice;
use Illuminate\Auth\Access\HandlesAuthorization;

class PracticePolicy
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
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Practice $practice)
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
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Practice $practice)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Practice $practice)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Practice $practice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Practice $practice)
    {
        //
    }
}
