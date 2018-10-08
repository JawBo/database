<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreate;
use Illuminate\Support\Facades\Storage; 
use App\User;
use App\Role;
class RoleController extends Controller
{
    public function admin()
    {
        $this->authorize('view-user');

        $users = User::with('role')->get();
        return view('admin',compact("users"));
    }
    public function delete($id)
    {
        $item = User::find($id);
        Storage::delete($item->image);
        $item->delete();
        return redirect ('admin');
    }
    public function save(Request $request, $id)
    {        
        $item = User::find($id);
        $item->role_id = $request->roleid;
        $item->save();
        return redirect('/admin');
    }
    public function create(UserCreate $request)
    {
        // $path=$request->file('image')->store('public');
        $item = new User;
        // $item->image = $path;
        $item->name=$request->name;
        $item->email = $request->email;
        $item->password=$request->password;
        $item->save();
        return redirect ('/admin');
    }
    public function changeImage(Request $request, $id){

        
        $item=User::find($id);
        $item->image_id=$request->imgid;
        $item->save();
        return redirect('/admin');

    }
}




