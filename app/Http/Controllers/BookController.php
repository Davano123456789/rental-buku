<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request) {
      $book = Book::all();
      return view('books',['book'=> $book]);
        
    }
    public function add() {
      $categories = category::all();
      return view('book-add', ['categories' => $categories]);
        
    }
    public function store(Request $request) {
    
      $validated = $request->validate([
        'book_code' => 'required|unique:book|max:255',
        'title' => 'required|max:255',
    ]);
    $newName = '';
      // logika upload  image jika upload image
      if($request->file('image')){
        // biar bisa di ambil jpg atau png atau yang lain
      $extension = $request->file('image')->getClientOriginalExtension();
      // kita gant namnya
      $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
      // kita upload
      $request->file('image')->storeAs('cover',$newName);

}
// masukan ke database
$request['cover'] = $newName;

    $book = Book::create($request->all());
    $book->categories()->sync($request->categories);
    return redirect('books')->with('success', 'menambah data buku sukses');  
        
    }

    public function edit($slug) {
      $book = Book::where('slug',$slug)->first();
      $categories = category::all();
      return view('book-edit',['categories'=>$categories, 'book' => $book]);
        
    }
    public function update(Request $request,$slug) {
    
      if($request->file('image')){
      $extension = $request->file('image')->getClientOriginalExtension();
      $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
      $request->file('image')->storeAs('cover',$newName);
      $request['cover'] = $newName;
      
      }
      $book = Book::where('slug',$slug)->first();

      $book->update($request->all());
      if($request->categories){
        $book->categories()->sync($request->categories);
      }
      return redirect('books')->with('success', 'update data buku sukses');  

    }
    public function delete($slug) {
      $book = Book::where('slug',$slug)->first();
      return view('book-delete',['book'=> $book]);
        
    }
    public function destroy($slug) {
      $book = Book::where('slug',$slug)->first();
      $book->delete();
      return redirect('/books')->with('success', 'data book sukses di hapus'); 
        
    }
    public function deleteBook() {
      $deletedBook = Book::onlyTrashed()->get();
      return view('book-deleted-list',['deletedBook'=>$deletedBook]);
        
    }
    public function restore($slug) {
      $book =Book::withTrashed()->where('slug',$slug)->first();
      $book->restore();
      return redirect('/books')->with('success', 'data category sukses di kembalikan'); 
        
    }
}
