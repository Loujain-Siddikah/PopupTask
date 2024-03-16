<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Enums\RolesEnum;
use App\DTO\ResponseData;
use App\DTO\GetResponseData;
use App\Events\OwnerNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Popup\LogInteractionRequest;
use App\Interfaces\Popup\PopupInteractionRepositoryInterface;

class InteractionController extends Controller
{
    public function __construct(private PopupInteractionRepositoryInterface $popupInteraction)
    {
    }

    /**
     * log user interactions.
     *
     * @param LogInteractionRequest $authRepository
     * @return ResponseData
     * @throws UnknownProperties
     */
    public function logInteraction(LogInteractionRequest $request):ResponseData
    {
        $user = Auth::user();
        $interactionData = $this->popupInteraction->logInteraction($request->validated(), $user);

        // get user who has role owner(i have only one owner in db)
        $owner = User::whereHas("roles", function($q){ 
            $q->where("name", RolesEnum::OWNER->value);
         })->first();
        
        // broadcast the event to the owner channel
        broadcast(new OwnerNotification($owner->id,$interactionData->user_id, $interactionData->popup_id,$interactionData->type))->toOthers();
        return GetResponseData::getResponseData(
            null,
           'Interaction logged successfully',
            200
        );
    }
}
