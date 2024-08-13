<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\RentLogs;

class BookRentController extends Controller
{
    public function index(){
$book = Book::all();
$user = User::where('role_id','2')->where('status','active')->get();
    return view('book-rent',['user'=>$user,'book'=>$book]);
}
public function store( Request $request){
    $request['rent_date'] = Carbon::now()->toDateString();  
$request['return_date'] = Carbon::now()->addDay(3)->toDateString();  
$book = Book::findOrFail($request->book_id)->only('status');

if($book['status'] != 'in stock'){

    Session::flash('message', 'Tidak bisa dipinjam, buku lagi di pinjam'); 
    Session::flash('alert-class', 'alert-danger'); 
    return redirect('/book-rent'); 
}
else{
    $count = RentLogs::where('user_id',$request->user_id)->where('actual_return_date', null)->count();
    if($count >= 3){
        
            Session::flash('message', 'pinjam sudah 3 kali dan belum dikembalikan, tidak bisa meminjam lagi'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/book-rent'); 

    }
    else{

        // dua proses
        try {
            DB::beginTransaction();
            // proses insert rent_logs table
            //  proses update book table
            RentLogs::create($request->all());
            $book = Book::findOrFail($request->book_id);
            $book->status = 'not available';
            $book->save();
            DB::commit();
            Session::flash('message', 'Buku sukses dipinjam'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/book-rent'); 
    
        } catch (\Throwable $th) {
            // jika gagal
           DB::rollBack();
        }
    }
    }

    }
}
