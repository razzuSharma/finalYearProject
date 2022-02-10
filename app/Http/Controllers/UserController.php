<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index(){
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function edit($id){
        $usera = User::find($id);
        return view('users.edit', [
            'user' => $usera
        ]);
    }

    public function update(Request $request, User $user, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user, $id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');

    }


//     public function changePassword(Request $request, User $user, $id){
//         $user = User::find($id);
//         return $user;
// }

//     public function changeDetails(Request $request){
//         $user = User::find($id);
//         return $user;
//     }
}