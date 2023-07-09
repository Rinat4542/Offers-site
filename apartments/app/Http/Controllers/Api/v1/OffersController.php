<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function alloffers()// вывод предложений с нужными столбцами
    {
        $offers =  Offer::query()
        ->select(['b24_contact_id' , 'b24_deal_id', 'b24_manager_id', 'position', 'phone', 'avatar'])
        ->get();

        return $offers;
    }

    public function show(Offer $offer)//вывод одного предложения
    {
        return $offer;
    }

    public function create(Request $request)//создание предложения 
    {
        $offers =  Offer::query()->create([
            'b24_contact_id' => $request->input('b24_contact_id'),
            'b24_deal_id' => $request->input('b24_deal_id'),
            'b24_manager_id' => $request->input('b24_manager_id'),
            'position' => $request->input('position'),
            'phone' => $request->input('phone'),
            'avatar' => $request->input('avatar'),
        ]);
        return $this->show($offers);

    }

    public function update(Request $request, Offer $offer)
    {
        $offer->update([
            'b24_contact_id' => $request->input('b24_contact_id'),
            'b24_deal_id' => $request->input('b24_deal_id'),
            'b24_manager_id' => $request->input('b24_manager_id'),
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'avatar' => $request->input('avatar'),
            'status' => $request->input('status'),
            'date_end' => $request->input('date_end'),
        ]);
        return $offer;
    }

    public function delete(Offer $offer)
    {
        $offer->delete();

    }
}
