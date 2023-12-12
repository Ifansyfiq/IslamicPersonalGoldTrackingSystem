<?php

namespace App\Policies;

use App\Models\Gold;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GoldPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list record');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Gold $gold): bool
    {
        return $user->hasPermissionTo('view record');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create record');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Gold $gold): bool
    {
        return $user->hasPermissionTo('update record');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Gold $gold): bool
    {
        return $user->hasPermissionTo('delete record');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Gold $gold): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Gold $gold): bool
    {
        return false;
    }
}
