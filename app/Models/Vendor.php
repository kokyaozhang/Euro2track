<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['vendor_name',
        'vendor_contact','vendor_email','vendor_category','vendor_role','Calibration','Premain','OOrder','Repair','Maturity','remarks'
    ];
    protected $guarded=[];
}
