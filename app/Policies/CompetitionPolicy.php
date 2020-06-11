<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompetitionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }




    public function see(User $user)
    {
        if ($user->hasPermission('view_all_competitions'))
            return TRUE;

        return FALSE;
    }
    public function create(User $user)
    {
        if ($user->hasPermission('create_competition'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_competition'))
            return TRUE;
        return FALSE;
    }

    public function edit(User $user)
    {
        if ($user->hasPermission('edit_competition'))
            return TRUE;

        return FALSE;
    }

    public function disable(User $user)
    {
        if ($user->hasPermission('delete_competition'))
            return TRUE;

        return FALSE;
    }
}
