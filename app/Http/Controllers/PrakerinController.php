<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prakerin;
class PrakerinController extends Controller
{
    //

    public function test2()
    {
    	$a = prakerin::all();
    	return view('index', compact('a'));
    }
    public function param($nm)
    {
        $a = prakerin::where('nama','like','%'.$nm.'%')->orwhere('jurusan','like','%'.$nm.'%')->get();
        return $a;
    }

    public function test3($nama)
    {
    	$aa=['binatang'=>['kucing','macan'],
    		'laptop'=>['acer','asus'],
    		'kendaraan'=>['mobil','motor']];
    	$a = $aa[$nama];
    	return view('index2', compact('a'));
    }
}
