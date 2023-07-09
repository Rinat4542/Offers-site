<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function create(Request $request)//создание предложения 
    {
        $items =  Item::query()->create([
            'offer_id' => $request->input('offer_id'),
            'cid' => $request->input('cid'),
            'type' => $request->input('type'),
            'square' => $request->input('square'),
            'complex' => $request->input('complex'),
            'house' => $request->input('house'),
            'description' => $request->input('description'),
            'images' => $request->input('images'),
            'like' => $request->input('like')
        ]);
        return $this->show($items);

    }
}
