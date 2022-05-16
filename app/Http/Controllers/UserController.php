<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Cookie;

class UserController extends Controller
{
    public function showLoginPage(){
        return view('login');
    }

    public function showRegisterPage(){
        return view('register');
    }

    public function register(Request $request){

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string',
            'password' => 'required|confirmed|min:5|alpha_dash',
//            'password_confirmation' => 'required',
            'phone' => 'required|integer|digits_between:8,12',
            'gender' => 'required|in:male,female',
            'address' => 'required|min:10',
            'image_file' => 'required|mimes:jpg,jpeg,png'
        ]);

        $email = $request->post('email');
        $name = $request->post('name');
        $password = $request->post('password');
        $phone = $request->post('phone');
        $gender = $request->post('gender');
        $address = $request->post('address');

        $image_path = Str::uuid() . '.' . $request->file('image_file')->extension();
        $request->file('image_file')->move(public_path('storage/user'), $image_path);

        User::create(
            [
                'email' => $email,
                'name' => $name,
                'password' => bcrypt($password),
                'phone' => $phone,
                'gender' => $gender,
                'address' => $address,
                'profile_pic_path' => 'user/' . $image_path,
                'role' => 'member'
            ]
        );

        return redirect('/login');
    }

    public function login(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        if(auth()->attempt(['email'=>$email, 'password' => $password])){
            $cookies = array();
            if($request->has('remember_me')){
                array_push($cookies,
                            cookie('email', $email, 60),
                            cookie('password', $password, 60));
            }
            return redirect('/')->withCookies($cookies);
        }else{
            $errors = new MessageBag(['login' => ['Invalid Email or Password!']]);
            return redirect()->back()->withErrors($errors);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

    public function showProfilePage(){
        if(!auth()->check())
            return redirect('/login');

        return view('profile');
    }

    public function update(Request $request, $id){

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'name' => 'required|string',
            'phone' => 'required|integer|digits_between:8,12',
            'gender' => 'required|in:male,female',
            'address' => 'required|min:10',
            'image_file' => 'required|mimes:jpg,jpeg,png'
        ]);
        $u = User::find($id);

        $u->email = $request->post('email');
        $u->name = $request->post('name');
        $u->phone = $request->post('phone');
        $u->gender = $request->post('gender');
        $u->address = $request->post('address');

        $image_path = Str::uuid() . '.' . $request->file('image_file')->extension();
        $request->file('image_file')->move(public_path('storage/user'), $image_path);

        $u->profile_pic_path = 'user/' . $image_path;
        $u->save();

        return redirect()->back();
    }

    public function showManageUserPage(){
        $users = User::all();
        return view('manage_user', compact('users'));
    }

    public function showUpdateUserPage($id){
        $current_user = User::find($id);
        if($current_user == null)
            return redirect('/');
        return view('update_user', compact('current_user'));
    }

    public function delete($id){
        $u = User::find($id);
        if($u != null)
            $u->delete();

        return redirect()->back();
    }
}
