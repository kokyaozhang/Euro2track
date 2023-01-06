<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Identification_No',
        'Date_Performed','Next_Due_Date','Category','Type',
        'Nature_of_Problem','Correction_factor','Validated_by','Validated_Date'
    ];
    protected $guarded=[];
}
