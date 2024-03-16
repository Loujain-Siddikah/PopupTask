<?php
namespace App\Enums;

enum PopupTypeEnum: string
{
    // case NAMEINAPP = 'name-in-database';

    case FullScreenPopup = 'full_screen_popup';
    case SlideInPopup = 'slide_in_popup';
    case ExitIntentPopup = 'exit_intent_popup';

    /**
     * Array of available roles.
     *
     * @var array
     */
    const SET = [
        self::FullScreenPopup,
        self::SlideInPopup,
        self::ExitIntentPopup,
    ];

}