<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'sliders' => 'array',
        'section1' => 'array',
        'section2' => 'array',
        'section3' => 'array',
        'sections' => 'array',
    ];
    protected $fillable = [
        'category_id',
        'banner_title',
        'main_title',
        'withorwithout',
        'footer_title',
        'description',
        'cta_title',
        'cta_description',
        'product_name',
        'product_description',
        'product_image',
        'url',
        'meta_title',
        'meta_description',
        'banner_image',
        'header_image',
        'service_image',
        'service_home_image',
        'sliders',
        'section1',
        'section2',
        'section3',
        'sections',
    ];
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}