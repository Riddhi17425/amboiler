<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Blogs;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        $blogCount =Blogs::whereNull('deleted_at')->count();
        return view('admin.admin',compact('blogCount'));
    }
	
}