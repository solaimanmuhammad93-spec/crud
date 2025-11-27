<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    public function index(Request $request)
    {
        $data = User::all();
        // $name="solaiman";
        return view('welcome', compact('data'));
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function store(Request $request)
    {
        // return $request->input();
        // $user = new User();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->phone_number = $request->input('phone_number');
        // $user->save();
        // return redirect()->route('welcome');
        
        $validate= $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);
        
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone_number = $request->phone_number;
       $user->password = bcrypt('password');
       $user->save();

       session()->flash('success','User added successfully');
       return redirect()->route('welcome');
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $data = User::findorfail($id);
        return view('edit', compact('data'));
    }


   public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);
        
        $data = User::findorfail(base64_decode($id));

       
       $data->name = $request->name;
       $data->email = $request->email;
       $data->phone_number = $request->phone_number;
       $data->password = bcrypt('password');
       $data->save();

        
       session()->flash('success','User updated successfully');
       return redirect()->route('welcome');
    }
    function delete($id){
        $data = User:: Where('id', base64_decode($id))->delete();

        session()->flash('success','User deleted successfully');
        return redirect()->route('welcome');
    }
}


