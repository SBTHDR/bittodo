<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')) {
            // $request->session()->flash('message', 'Image Uploaded Successfully!');
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded Successfully!!!');
        }
        // $request->session()->flash('error', 'Image Not Uploaded!');
        return redirect()->back()->with('error', 'Image Not Uploaded!!!');;
    }
}
