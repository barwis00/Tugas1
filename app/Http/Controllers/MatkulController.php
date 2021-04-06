<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MatkulController extends Controller
{
    public function index(){
    	$matkul = DB::table('matkul')->get();

    	return view('matkul', ['matkul' => $matkul]);
    }
}
