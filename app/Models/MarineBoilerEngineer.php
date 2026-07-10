<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarineBoilerEngineer extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mb_engineer_details';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'Location',
        'linkedInprofile',
        'resume',
        'applied_for'
        
    ];
}
