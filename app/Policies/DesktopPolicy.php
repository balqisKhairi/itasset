<?php

namespace App\Policies;

use App\Desktop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Permission;
class DesktopPolicy
{
    use HandlesAuthorization;
//use hasPermission;
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Desktop  $desktop
     * @return mixed
     */
    public function view(User $user, Desktop $desktop)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('manage_items');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Desktop  $desktop
     * @return mixed
     */
    public function update(User $user, Desktop $desktop)
    {
        return $user->hasPermission('manage_items');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Desktop  $desktop
     * @return mixed
     */
    public function delete(User $user, Desktop $desktop)
    {
        return $user->hasPermission('manage_items');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Desktop  $desktop
     * @return mixed
     */
    public function restore(User $user, Desktop $desktop)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Desktop  $desktop
     * @return mixed
     */
    public function forceDelete(User $user, Desktop $desktop)
    {
        //
    }
}
