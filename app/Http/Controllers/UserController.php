<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PharIo\Version\Exception;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function postReg(Request $request)
    {
        if(User::where('email',$request->input('email'))->exists()){
            return redirect(route('user.reg'))->withErrors(['email'=>'Аккаунт с такой почтой уже существует']);
        }
        $user = User::create([
            'email'    => $request->input('email'),
            'name'     => $request->input('name'),
            'surname'     => $request->input('surname'),
            'password' => bcrypt($request->input('password')),
        ]);

        if($user) {
            Auth::login($user);
            return redirect(route('user.private'));
        }
        else{
            return redirect(route('user.reg'))->withErrors(['formError'=>'Error']);
        }
    }
    public function postLogin(Request $request)
    {

        $validateFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validateFields,$request->input('remember')))
        {
            return redirect(route('user.private'));
        }
        else
        {
            return redirect(route('user.login'))->withErrors(['err'=>'Email или пароль введены неверно']);
        }
    }
    public function photoLoad(Request $request)
    {
        $user=Auth::user();
        if($request->hasFile('photo')){
            if(Auth::user()['photo']!='') {
                Storage::disk('public')->delete(Auth::user()['photo']);
            }
                $photo=$request->file('photo')->store('avatars','public');;
                $user->photo=$photo;
                $user->save();
        }
        return redirect(route('user.photo'))->with(['path'=>Auth::user()['photo']]);
    }
}
