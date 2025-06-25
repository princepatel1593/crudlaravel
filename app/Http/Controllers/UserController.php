<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show All User List
    public function index(){
        $users=User::all();
        return view('user-list',compact('users'));
    }
    //Show User Create Form
    public function create(){
        return view('user-form');
    }

    // Store user data 
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'birth'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        // User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->name,
        //     'birth'=>$request->birth,
        //     'phone'=>$request->phone,
        //     'message'=>$request->message,

        // ]);
        User::create($request->all());
        return redirect()->route('user.index');
    }
    
    public function update(Request $request,$id){
         $request->validate([
            'name'=>'required',
            'email'=>'required',
            'birth'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        $users=User::findorfail($id);
        $users->update($request->all());
        return redirect()->route('user.index');
    }

    public function edit($id){
        $users=User::findorfail($id);
        return view('user-edit',compact('users'));
    }

    //User Delete
    public function destroy($id){
        $users=User::findorfail($id);
        $users->delete();
        return redirect()->route('user.index')->with('User delete Successfully');
    }
}
