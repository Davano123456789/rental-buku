<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request) {
        $categories = category::all();
    //   jika halaman mengirim pencarian
    if($request->category || $request->title){
        
        //   jika halaman mengirim pencarian menggunakan title dam categories
        $book = Book::where('title', 'like', '%'.$request->title.'%')
        ->orwhereHas('categories',function($q) use($request) {

             $q->where('categories.id',$request->category);
        })->get();
    }

    else{
        $book = Book::all();
    }
        return view('book-list-all-home', ['book' => $book,'categories' => $categories]);
    }
}
