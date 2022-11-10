<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function index(){
        $mangas = Manga::latest()->paginate(10);
        return view('admin.index',compact('mangas'));
    }
}
