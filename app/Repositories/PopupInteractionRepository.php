<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\popupInteraction;
use App\Interfaces\Popup\PopupInteractionRepositoryInterface;

class PopupInteractionRepository implements PopupInteractionRepositoryInterface 
{
    /**
     * log user interactions.
     * @param array $data
     * @param User $user
     * @return popupInteraction
     */
    public function LogInteraction(array $data, User $user): popupInteraction
    {
        $data['user_id'] = $user->id;
        return popupInteraction::create($data);
    }
}