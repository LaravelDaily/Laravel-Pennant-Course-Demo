<?php

namespace App\Features;

use App\Models\User;

class TasksManagement
{
    /**
     * Resolve the feature's initial value.
     */
    public function resolve(User $user): mixed
    {
        return (bool)$user->is_premium;
    }
}
