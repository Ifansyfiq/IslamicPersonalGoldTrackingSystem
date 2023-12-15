<?php

namespace App\Policies;

use App\Models\Pawnshop;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PawnshopPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list pawnshop');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pawnshop $pawnshop): bool
    {
        return $user->hasPermissionTo('view pawnshop');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create pawnshop');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pawnshop $pawnshop): bool
    {
        return $user->hasPermissionTo('update pawnshop');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pawnshop $pawnshop): bool
    {
        return $user->hasPermissionTo('delete pawnshop');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pawnshop $pawnshop): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pawnshop $pawnshop): bool
    {
        return false;
    }
}
