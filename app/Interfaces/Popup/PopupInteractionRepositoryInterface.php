<?php

namespace App\Interfaces\Popup;

use App\Models\User;

interface PopupInteractionRepositoryInterface
{
    public function LogInteraction(array $data, User $user): mixed;
}