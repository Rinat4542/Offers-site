<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;


    protected $fillable = [
        'b24_contact_id', 'b24_deal_id', 'b24_manager_id', 'name', 'position', 'phone', 'avatar', 'status', 'date_end'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
