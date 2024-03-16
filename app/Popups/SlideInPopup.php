<?php

namespace App\Popups;

use App\Models\Popup;
use App\Interfaces\Popup\PopupFactoryInterface;
use App\Models\FieldType;
use App\Models\FormField;

class SlideInPopup implements PopupFactoryInterface
{
    public function createPopup(array $data): Popup
    {
        $popup = Popup::create($data);
        return $popup;
    }

   
    public function updatePopup(array $data, Popup $popup): Popup
    {
        $popup->update($data);   
        return $popup;    
    }

}
