<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;


class EchartController extends Controller
{
    public function echart(Request $request)
    {
    	$fruit = Product::where('product_type','fruit')->get();
    	$veg = Product::where('product_type','vegitable')->get();
    	$grains = Product::where('product_type','grains')->get();
    	$fruit_count = count($fruit);    	
    	$veg_count = count($veg);
    	$grains_count = count($grains);
        //dd($fruit_count,$veg_count,$grains_count);
    	return view('echart',compact('fruit_count','veg_count','grains_count'));

		//$name = Product::where('product_type','fruit')->value('name');
		//dd(Str::slug($name , '-'));
		//dd(SlugService::createSlug(Product::class, 'product_type', $name));
    }
}
