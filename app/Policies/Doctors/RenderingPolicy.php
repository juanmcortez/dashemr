<?php

namespace App\Policies\Doctors;

use App\Models\Users\User;
use App\Models\Doctors\Rendering;
use Illuminate\Auth\Access\HandlesAuthorization;

class RenderingPolicy
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
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Rendering $rendering)
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
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Rendering $rendering)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Rendering $rendering)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Rendering $rendering)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Rendering $rendering)
    {
        //
    }
}
