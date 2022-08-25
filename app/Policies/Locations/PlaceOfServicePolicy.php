<?php

namespace App\Policies\Locations;

use App\Models\Users\User;
use App\Models\Locations\PlaceOfService;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlaceOfServicePolicy
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
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PlaceOfService $placeOfService)
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
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PlaceOfService $placeOfService)
    {
        //
    }
}
