<?php

namespace App\Interfaces\Auth;

use App\Models\User;

interface AuthRepositoryInterface 
{
    /**
     * Create access token for user.
     *
     * @return mixed
     */
    public function createAccessToken(User $user): mixed;

    /**
     * Authenticate user.
     *
     * @return mixed
     */
    public function authenticateUser(array $data): mixed;
}