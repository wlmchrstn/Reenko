<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request) {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'email' => 'unique:App\Models\User,email',
            'password' => 'required',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'gender' => 'required'
        ]);
        $str = $request->first_name.' '.$request->last_name;
        $dob = $request->year.'-'.$request->month.'-'.$request->day;
        User::create([
            'id' => Str::uuid(),
            'full_name' => $str,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date_of_birth' => $dob,
            'gender' => $request->gender
        ]);

        return redirect()->to('home');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'login_email' => 'required',
            'login_password' => 'required',
        ]);

        $user = User::get(['email', 'password'])->where('email', $request->login_email);
        $full_user = User::get()->where('email', $request->login_email);

        if ($user->count() == 0) {
            return abort('403', 'Invalid Email or Password, go Back to Previous Page!');
        } else if ($user->count() == 1) {
            foreach($user as $obj) {
                $hashedPassword = $obj->password;
                if($obj->email == $request->login_email) {
                    if (Hash::check($request->login_password, $hashedPassword)) {
                        $request->session()->put('data', $full_user);
                        // return $request->session()->get('data');
                        return redirect()->to('home');
                    } else {
                        return abort('403', 'Invalid Email or Password, go Back to Previous Page!');
                    }
                } else {
                    return abort('403', 'Invalid Email or Password, go Back to Previous Page!');
                }
            }
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();

        return redirect()->to('home');
    }
}
