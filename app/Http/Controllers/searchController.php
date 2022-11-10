<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Chapter;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request)
    {

        $manga = Manga::first();
        $last_tree_chapters = Chapter::latest()->take(3)->get();
        $chapters = Chapter::where('manga_id',$manga->id)->get();

        if ($request->has('search')) {
            $chapters = Chapter::where('name', 'like', '%' . $request->search . '%')->get();
            return view('welcome',compact('chapters','last_tree_chapters','manga'))->withQuery ( $request->search );
        }else{
            return view('welcome',compact('chapters','last_tree_chapters','manga'));
        }
    }
}
