<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroSlide extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'hero_slide';
    protected $primarykey = 'id';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'description',
        'image',
        'mobile_image',
    ];
}
