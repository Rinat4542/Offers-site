<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['offer_id', 'cid', 'type', 'square', 'complex', 'house', 'description', 'images', 'like'];


}
