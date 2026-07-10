<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Services; 

class ServiceCategory extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'service_category';
    protected $primarykey = 'id';
    protected $dates = ['deleted_at'];
    public function services()
    {
        return $this->hasMany(Services::class, 'category_id');
    }
    

}
