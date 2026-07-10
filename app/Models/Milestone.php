<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Milestone extends Model
{   
    use HasFactory, SoftDeletes;
    protected $table = 'milestone';
    protected $primarykey = 'id';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'sub_headings' => 'array',
    ];

}