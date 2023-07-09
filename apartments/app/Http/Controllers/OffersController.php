<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        return view('components.offers');
    }

    public function create(Request $request)
    {
        $request->file('avatar')->store('public/images');
        $avatarPath = "/storage/{$request->file('avatar')->store('images')}";

        $offers = new Offer();
        $offers->b24_contact_id = $request->input('b24_contact_id');
        $offers->b24_deal_id = $request->input('b24_deal_id');
        $offers->b24_manager_id = $request->input('b24_manager_id');
        $offers->name = $request->input('name');
        $offers->position = $request->input('position');
        $offers->phone = $request->input('phone');
        $offers->avatar = $avatarPath;
        $offers->status = $request->has('status');
        $offers->date_end = $request->input('date_end');
        $offers->created_at = $request->input('created_at');
        $offers->save();


        return redirect()->route('youroffers.show');
    }

    public function show($offers)
    {
        $offerItem = Offer::find($offers);
        
        return view('components.offer', [
            'offer' => $offerItem
        ]);
    }

    public function offers()
    {
        $offers = Offer::all();

        return view('components.youroffers', ['offers' => $offers]);
    }


}
