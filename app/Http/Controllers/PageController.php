<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
 public function getIndex($url=null){

 	$obj = Products::where ('url', $url)->first();
 	return view ('page', compact('obj'));
 }
}
