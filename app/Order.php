<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_number',
        'name',
        'mobile',
        'email',
        'address',
        'product_name',
        'colour',
        'amount',
        'trs_no',
        'status',
    ];

    public function colours(){
        return $this->hasMany('App\Colour', 'id', 'colour');
    }
}
