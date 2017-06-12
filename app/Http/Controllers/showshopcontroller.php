<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\shop;
use App\Meal;

class showshopcontroller extends Controller
{
    public function showshop()
    {
         $AllShops=DB::table('shops')->get();
         /*time format*/
          /*$AllShopTime=DB::table('shops')->select(DB::raw("TIME_FORMAT('businessFrom','%h:%i%p')");
          die($AllShopTime);*/
         return view('showshop',['AllShop'=>$AllShops,'test'=>0]);       
    }
    public function showshopdetial(shop $shop)
    {
        return view('shopinformation',['Shop'=>$shop]);
        //die("$shop->name");
    }
    public function showfood($shopid)
    {
        $shopmeals=DB::table('meals')->where('seller',$shopid)->get();
        return view('foodinformation',['meals'=>$shopmeals]);
    }
}


