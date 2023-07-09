<?php

namespace App\Http\Controllers;

use App\Models\Item;


class ApartmentsController extends Controller
{
    public function apartments()
    {
        $apartments = Item::all();
        
        
        return view('components.apartments', ['apartments' => $apartments]);
        
    }

}
