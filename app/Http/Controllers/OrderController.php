<?php

namespace App\Http\Controllers;


use App\Order;
use App\Tovar;
use App\Http\Requests\OrderRequest;
use Auth;


class OrderController extends Controller
{
    public function postIndex (OrderRequest $r){
//dd($r->all());
    	$arr = [];
    	$products = [];
    	foreach ($_POST as $key=>$value){ 
$id=(int)$key; 
if($id>0){ 
$products[$id]=Tovar::find($id); 
$arr[$id]=$value;  

		//dd($_POST);
    }

    }
    $body=serialize($arr);
    $r['body']=$body;
    $r['user_id']=(Auth::guest())?0:Auth::user()->id;
    Order::create($r->all());
   
    return redirect()->back();
}}
