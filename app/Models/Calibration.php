<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calibration extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Identification_No',
        'Calibration_point','Expired_Date','Calibration_Date','Next_Due_Date','Correction_factor','Validated_by','Validated_Date'];

    protected $guarded=[];
}
