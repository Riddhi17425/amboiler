<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';

    protected $fillable = [
        'fullname',
        'company_name',
        'mobile',
        'email',
        'subject',
        'message',
        'form_type',
    ];
}