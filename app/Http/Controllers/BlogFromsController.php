<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogfrom;

class BlogFromsController extends Controller
{
    public function blog()
    {
        $data['blogcreates'] = Blogfrom::paginate(4);
        return view('frontend.blog',$data);
    }

    public function blogform()
    {
        // $data['roadmaps'] = RoadMap::paginate(4);
        return view('backend.blogedit');
    }

    public function blogstore(Request $request)
    {
         $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
            'cover_img' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);

        $blogcreate = Blogfrom::create([
            'title' => $request->title,
            'discription' => $request->discription,
            'cover_img' => $request->file('cover_img')->store('images/coins/blog'),
        ]);

        if (empty($blogcreate)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        
        return redirect()->route('blog')->with('SUCCESS', "Valo Korsesis");
    }



    public function blogedit($blogupdt)
    {
        $data['blogpostupdate'] = Blogfrom::where('id', $blogupdt)->first();
        return view('backend.blogupdate', $data);
    }

    public function blogupdate(Request $request, $blogupdt)
    {
         $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
            'cover_img' => 'required|mimes:jpg,bmp,png|max:2048'
        ]);

        $blogupdates = Blogfrom::find($blogupdt);
        $blogupdates->title =  $request->title;
        $blogupdates->discription =  $request->discription;
        $blogupdates->cover_img =  $request->file('cover_img')->store('images/coins');
        $blogupdates->save();

        if (empty($blogupdates)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        
        return redirect()->route('blog')->with('SUCCESS', "Valo Korsesis");
    }

    public function blogdelete($blog_delete){
       $blogdel = Blogfrom::where('id',$blog_delete)->delete();

       if (empty($blogdel)) {
        return back()->with('ERROR', "Something went Wrong");
    }
    
    return back()->with('SUCCESS', "Delete Successfully");
    }
}