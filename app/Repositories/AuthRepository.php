<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\Auth\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface 
{
    /**
     * Create an access token for the given user.
     *
     * @param User $user
     * @return string
     */
    public function createAccessToken(User $user): string
    {
        return $user->createToken('Personal Access Token')->plainTextToken;
    }

    /**
     * Authenticate a user with the given data.
     *
     * @param array $data
     * @return User
     *
     */
    public function authenticateUser(array $data): User
    {
        $user= User::where('username',$data['username'])->firstOrFail();
        return $user;
    }

}