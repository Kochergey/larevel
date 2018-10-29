<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class PageController extends Controller
{
 public function getIndex($url=null){

 	$obj = Contacts::where ('url', $url)->first();
 	return view ('page', compact('obj'));
 }
}
