<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function create_user(Request $request){
        $name=$request->name;
        $email=$request->email;
        $number=$request->number;
        $address=$request->address;
        $district=$request->district;
        $postal_code=$request->postal_code;
        $password=Hash::make($request->password);

        file_put_contents('data.txt',$name);

        User::create([
            'name'=>$name, 
            'number'=>$number,
            'email'=>$email,        
            'password' =>$password,
            'address' =>$address,
            'district' =>$district,
            'postal_code' =>$postal_code,
            ]);
    }

    public function login(Request $req)
    {

        $credentials = array(
            'number' => $req->number,
            'password'=>$req->password
            );

        $user= user::where(['number'=>$req->number])->first();

        if ($user) {
            if (auth()->attempt($credentials)) {
                $user_id = $user->id;
                Session::put('user_id',$user_id);
                return redirect('/');
            }

            else{
                session()->flash('message', 'Invalid credentials');
                
            }
    }

    }

    public function sign_out(Request $request){
        auth()->logout();
        return view('registration/sign_in');
    }


}
