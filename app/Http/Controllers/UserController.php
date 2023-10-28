<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function displayUsers()
    {
        $users = User::where('id', '!=', 1)->latest()->get();

        return view('admin.datatable', ['users' => $users]);
    }
    public function index()
    {
        $users = User::where('role', 'user')->get();
        $agronomy_user = User::where('role', 'agronomist')->get();
        $userCount = $users->count();
        $videoCount = Video::count();
        $agronomy= $agronomy_user->count();

        return view('admin.dashboard', [ 'userCount' => $userCount,'agronomy'=>$agronomy, 'videoCount' => $videoCount]);
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'lname' => 'required',
            'role' => 'required|in:user,admin,agronomist', // Validate the role
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        $user = User::create([
            'name' => $request->input('name'),
            'lname' => $request->input('lname'),
            'role' => $request->input('role'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    
        if ($user) {
            return redirect()->back()->with("success", "User created");
        } else {
            return redirect()->back()->with("error", "User creation failed");
        }
    }
    
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->lname = $request->lname;
        $user->role = $request->role;
        
        // Check if the password field is not empty before updating it
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        
        $user->save();
        
        return redirect()->back()->with("success","User updated");
    }
    
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("success","User removed successfully!");
    }


   
}
