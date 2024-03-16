<?php

use App\Enums\RolesEnum;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


// checks if the authenticated user is an owner and matches the given owner ID.
// If both conditions are met, access to the channel is granted.
Broadcast::channel('owner-notifications.{ownerId}', function ($user, $userId) {
    // Only allow the owner to listen to this channel
    return $user->id === (int) $userId && $user->hasRole(RolesEnum::OWNER->value);
});

