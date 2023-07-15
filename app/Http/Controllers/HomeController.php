<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\slider;

use App\Models\gallary;
use App\Models\handsat;
use App\Models\publicad;
use App\Models\cdepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $slider= slider::all();
        $gallary=gallary::all();
        $news=news::all();
        return view('Frontend.index', compact('slider','gallary','news'));
    }
    public function achievements()
    {
        $gallary=gallary::all();

        return view('Frontend.pages.achievements')->with('gallary',$gallary);
    }
    public function contact()
    {
        $gallary=gallary::all();

        return view('Frontend.pages.contact')->with('gallary',$gallary);
    }
    public function fresh()
    {
        return view('Frontend.pages.fresh');
    }
    public function maps()
    {
        $cdepartment= cdepartment::all();
        $allpublicad = publicad::all();
        $allhandasat = handsat::all();
        $east= publicad::where('cdid' , '=' , 1)->get();
        $west= publicad::where('cdid' , '=' , 2)->get();
        $sini= publicad::where('cdid' , '=' , 3)->get();
        $middle= publicad::where('cdid' , '=' , 4)->get();
        return view('frontend.pages.Maps' , compact ('cdepartment','allpublicad' ,'east' ,'west','sini','middle'));
    }
        public function publicad_details($id){

        $publicad = DB::table('publicad')->join('cdepartment' ,'cdepartment.id' ,'=' ,'publicad.cdid')
        ->select('publicad.*', 'cdepartment.name as cname' )
        ->where('publicad.id','=' ,$id)
        ->first();
        $relatedpublicad =handsat::where('paid' , '=' , $publicad->id)->get();
        return view('Frontend.pages.publicad_details' ,compact('publicad','relatedpublicad'));
    }
}
