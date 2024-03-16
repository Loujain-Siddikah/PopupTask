<?php

namespace App\Factories;

use App\Enums\PopupTypeEnum;
use App\Models\PopupType;
use App\Popups\SlideInPopup;
use App\Popups\ExitIntentPopup;
use App\Popups\FullscreenPopup;
use App\Interfaces\Popup\PopupFactoryInterface;

class PopupTypeFactory
{
    public static function create(string $typeId): PopupFactoryInterface
    {
        $popupType = PopupType::findOrFail($typeId);
        switch ($popupType->name) {
            case PopupTypeEnum::FullScreenPopup->value:
                return new FullscreenPopup();
            case PopupTypeEnum::SlideInPopup->value:
                return new SlideInPopup();
            case PopupTypeEnum::ExitIntentPopup->value:
                return new ExitIntentPopup();
            default:
                throw new \InvalidArgumentException("Invalid popup type");
        }
    }
}
