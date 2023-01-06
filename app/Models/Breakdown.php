<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Identification_No',
        'Breakdown_date','Breakdown_problem','Breakdown_parts',
        'Description','Complete_date','Action_by','Reviewed_by','Remarks','filename'
    ];
    protected $guarded=[];
}
