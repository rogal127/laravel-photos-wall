<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function add()
    {
        return view('photo.add');
    }

    public function show($id)
    {
        $photo = Photo::find($id);

        return view('photo.show', ['photo' => $photo]);
    }

    public function store(Request $request)
    {
        if (!empty($request->image)) {
            $photo = new Photo;
            $photo->description = $request->description;
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $photo->path = $imageName;
            $photo->user_id = Auth::user()->id;
            $photo->save();
        }

        return redirect('/');
    }
}
