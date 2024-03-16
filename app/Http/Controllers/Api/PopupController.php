<?php

namespace App\Http\Controllers\Api;

use App\DTO\ResponseData;
use App\DTO\GetResponseData;
use Illuminate\Http\Request;
use App\Factories\PopupTypeFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Popup\CreatePopupRequest;
use App\Http\Requests\Popup\UpdatePopupRequest;
use App\Models\Popup;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Create new popup.
     * @param CreatePopupRequest $request
     * @return ResponseData
     * @throws UnknownProperties
     */
    public function store(CreatePopupRequest $request)
    {
        $factory = PopupTypeFactory::create($request->input('popup_type_id'));
        $popup = $factory->createPopup($request->validated());
        return GetResponseData::getResponseData(
            null,
           'Popup created successfully',
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePopupRequest $request, Popup $popup)
    {
        $factory = PopupTypeFactory::create($popup->id);
        $popup = $factory->updatePopup($request->validated(), $popup);
        return GetResponseData::getResponseData(
            $popup,
           'Popup updated successfully',
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Popup $popup)
    {
        $popup->delete();
        return GetResponseData::getResponseData(
            null,
           'Popup deleted successfully',
            200
        );
    }
}
