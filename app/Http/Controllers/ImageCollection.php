<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
class ImageCollection extends Controller
{
    public function index(){
    	$data = Image::paginate(1);
    	return view('welcome',['data'=>$data]);
    }
}
