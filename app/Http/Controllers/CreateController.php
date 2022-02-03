<?php

namespace App\Http\Controllers;

use App\Models\RoadMap;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function home()
    {
        $data['roadmaps'] = RoadMap::paginate(4);
        return view('frontend.home', $data);
    }

    public function form()
    {
        return view('backend.form');
    }

    public function formStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'year' => 'required',
            'title' => 'required|max:255',
            'discription' => 'required',
            'cover_img' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);
        $create = RoadMap::create([
            'name' => $request->name,
            'year' => $request->year,
            'title' => $request->title,
            'discription' => $request->discription,
            'cover_img' => $request->file('cover_img')->store('images/coins'),
        ]);
        if (empty($create)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        return redirect()->route('home')->with('SUCCESS', "Valo Korsesis");
    }

    public function edit($roadmap)
    {
        $data['roadmapedit'] = RoadMap::where('id', $roadmap)->first();
        return view('backend.edit', $data);
    }

    public function update(Request $request,$roadmap)
    {   
        $request->validate([
            'name' => 'required|max:25',
            'year' => 'required',
            'title' => 'required|max:255',
            'discription' => 'required'
            // 'cover_img' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);
        $updated = RoadMap::where('id', $roadmap)->update([
            'name' =>  $request->name,
            'year' =>  $request->year,
            'title' =>  $request->title,
            'discription' =>  $request->discription
            // 'cover_img' => $request->file('cover_img')->store('images/coins')
        ]);
        if (empty($updated)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        return redirect()->route('home')->with('SUCCESS', "Valo Korsesis");
    }
}
