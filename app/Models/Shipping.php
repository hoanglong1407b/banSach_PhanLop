<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = true; //set time to false
    protected $fillable = [
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'shipping_email',
        'shipping_notes'
    ];
    protected $primaryKey = 'shipping_id';
    protected $table = 'tbl_shipping';
}
