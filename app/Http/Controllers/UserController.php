<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Request $request) {
        // $request->session()->flush();
        return view('profile');
    }
    public function index() {
        // $request->session()->flush();
        $users = User::where('role_id',2)->where('status','active')->get();
        return view('user',['users'=>$users]);
    }
    public function registeredUser() {
        $registeredUsers = User::where('role_id',2)->where('status','inactive')->get();
        return view('registered-user',['registeredUsers'=>$registeredUsers]);
    }
    public function show($slug) {
        $user =user::where('slug',$slug)->first();
        return view('user-detail',['user'=>$user]);
    }
    public function approve($slug) {
        $user =user::where('slug',$slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('user-detail/'.$slug)->with('success', 'user approve berhasil'); 
    }
    public function delete($slug) {
        $user =user::where('slug',$slug)->first();
        return view('user-delete',['user'=>$user]);
    }
public function destroy($slug) {
        $user =user::where('slug',$slug)->first();
        $user->delete();
        return redirect('users')->with('success', 'user berhasil di hapus'); 
    }
    public function bannedUser() {
        $bannedUsers =user::onlyTrashed()->get();
        return view('user-banned',['bannedUsers'=>$bannedUsers]);
    }
    public function restore($slug) {
        $category =user::withTrashed()->where('slug',$slug)->first();
        $category->restore();
        return redirect('/users')->with('success', 'data category sukses di kembalikan'); 
    }
}
