<?php

namespace App\Policies;

use App\Models\DataWarga;
use App\Models\User;

class DataWargaPolicy
{
    /**
     * Determine whether the user can view any data warga.
     */
    public function viewAny(User $user): bool
    {
        return true; // or add your logic
    }

    /**
     * Determine whether the user can view the data warga.
     */
    public function view(User $user, DataWarga $dataWarga): bool
    {
        return $user->id === $dataWarga->created_by;
    }

    /**
     * Determine whether the user can create data warga.
     */
    public function create(User $user): bool
    {
        return true; // or add your logic
    }

    /**
     * Determine whether the user can update the data warga.
     */
    public function update(User $user, DataWarga $dataWarga): bool
    {
        return $user->id === $dataWarga->created_by;
    }

    /**
     * Determine whether the user can delete the data warga.
     */
    public function delete(User $user, DataWarga $dataWarga): bool
    {
        return $user->id === $dataWarga->created_by;
    }
}
