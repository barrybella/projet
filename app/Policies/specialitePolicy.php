<?php

namespace App\Policies;

use App\User;
use App\Administation;
use Illuminate\Auth\Access\HandlesAuthorization;

class specialitePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any administations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function see(User $user)
    {
        if ($user->hasPermission('view_all_administration'))
            return TRUE;

        return FALSE;
    }

    public function create(User $user)
    {
        if ($user->hasPermission('create_administration'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_administration'))
            return TRUE;

        return FALSE;
    }


    public function edit(User $user)
    {
        if ($user->hasPermission('edit_administration'))
            return TRUE;

        return FALSE;
    }


    public function delete(User $user)
    {
        if ($user->hasPermission('delete_administration'))
            return TRUE;

        return FALSE;
    }
}
