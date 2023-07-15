<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\slider;
use App\Models\gallary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $slider= slider::all();
        $gallary=gallary::all();
        $news=news::all();
        return view('Frontend.Dashboard.Dashboard list',compact('slider','gallary','news'));
    }
    public function Dashboardadd()
    {
        return view('Frontend.Dashboard.Dashboard add');
    }
    function store(Request $request){
       $slider=new slider();
        if($request->hasFile('image')){
            $file = $request->file('image');
$extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
$file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->discription=$request->input('discription');
        $slider->save();
        return redirect()->back()->with('status','add succuess');
    }
        function Newsinsert(Request $request){
        $news= new news();
        $news->titlenews=$request->input('titlenews');
        $news->news=$request->input('news');
        $news->save();

 return redirect()->back()->with('status','add succuess');

    }
    public function edit($id)
    {
        $slider=slider::find($id);
        return view('Frontend.Dashboard.Dashboard edit')->with('slider',$slider);
    }
    public function editnews($id)
    {
        $news=news::find($id);
        return view('Frontend.Dashboard.Dashboard editnews')->with('news',$news);
    }
    public function update(Request $request ,$id)
    {
        $slider=slider::find($id);
        if($request->hasFile('image')){
            $destination='uploads/slider/'.$slider->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
$extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
$file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->discription=$request->input('discription');
        $slider->update();
        return redirect()->route('Dashboard')->with('status','Data Update succuess');
    }
    public function delete($id)
    {
        $slider=slider::find($id);
        $slider->delete();
        return redirect()->route('Dashboard')->with('status','Data Update succuess');
    }
    public function updatenews(Request $request,$id){
        $news=news::find($id);
        $news->titlenews=$request->input('titlenews');
        $news->news=$request->input('news');
        $news->update();
        return redirect()->route('Dashboard')->with('status','Data Update succuess');
}
public function deletenews($id)
{
    $news=news::find($id);
    $news->delete();
    return redirect()->route('Dashboard')->with('status','Data Update succuess');
}
}
