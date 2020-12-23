<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createUser(Request $request){
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
                $id = Auth::user()->id;
                $name= User::where('id',$id)->first()->name;
                 Session::put('name',$name);

                return redirect('/');
            }

            else{
                return view('registration.sign_in');
            }    
    }
    else{
        return view('registration.sign_in');
    }

    }



    public function resetPassword(Request $request){
        
        $data= (user::where('email', $request->email)->first());

           

        if (Hash::check($request->old_password, $data['password'])) {
            user::where('email', $request->email)->update(['password'=>Hash::make($request->new_password)]);

            echo "ok";
        }

    else {
        echo "not ok";
    }

    }



    public function signOut(Request $request){
        $request->session()->flush();

        return view('registration/sign_in');
    }


}
