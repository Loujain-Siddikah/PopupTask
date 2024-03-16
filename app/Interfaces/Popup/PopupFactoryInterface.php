<?php

namespace App\Interfaces\Popup;

use App\Models\Popup;

interface PopupFactoryInterface
{
    public function createPopup(array $data): mixed;
    public function updatePopup(array $data, Popup $popup): mixed;
}