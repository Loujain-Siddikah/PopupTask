<?php

namespace App\Http\Controllers\Api;

use App\DTO\ResponseData;
use App\DTO\GetResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\loginRequest;
use App\Interfaces\Auth\AuthRepositoryInterface;

class AuthController extends Controller
{
    /**
     * AuthController constructor.
     *
     * @param AuthRepositoryInterface $authRepository
     */
    public function __construct(private AuthRepositoryInterface $authRepository)
    {
    }

    /**
     * Authenticate and log in a user.
     *
     * @param loginRequest $request
     * @return ResponseData
     * @throws UnknownProperties
     */
    public function login(loginRequest $request): ResponseData
    {
        // Authenticate the user using the authRepository
        $user = $this->authRepository->authenticateUser($request->validated());

        // Create an access token for the authenticated user
        $token = $this->authRepository->createAccessToken($user);

        // Return the response data indicating successful user login
        return GetResponseData::getAuthResponseData(
            $user,
            $token,
           'user_login_successfully',
            200
        );
    }
}
