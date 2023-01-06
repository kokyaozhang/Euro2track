<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Chemical_Name',
        'Lot_No',
        'Product_No',
        'Concentration',
        'CAS_No',
        'Formula',
        'Brand',
        'Packing_size',
        'Quantity',
        'Received_Date',
        'Expired_Date',
        'Location',
        'Bottle_ID','State',


    ];
    protected $guarded=[];
}
