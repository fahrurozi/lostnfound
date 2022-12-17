<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

const ROOT_LOGREG_PAGES = 'layout.logreg.page.';

class RegisterController extends Controller
{
    //
    public function login()
    {

        if (session()->get('user.id') == null) {
            return $this->__view('login');
        }
        return $this->__view('login');
    }

    public function post_login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->password == $request->password) {
                $request->session()->put('user.id', $user->id);
                if ($user->role == 'USER') {
                    return redirect()->route('dashboard.index');
                } else if ($user->role == 'ADMIN') {
                    return redirect()->route('admin.dashboard');
                }
            }
        }

        return redirect()->route('login.index')->with('error', 'Email atau password salah');
    }

    public function register()
    {
        if (session()->get('user.id') == null) {
            return $this->__view('register');
        }
        return $this->__view('register');
    }

    public function post_register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->role = "USER";
        $user->save();

        $request->session()->put('user.id', $user->id);

        return redirect()->route('dashboard.index')->with('success', 'Registrasi berhasil');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $view
     * @param  array   $data
     * @return \Illuminate\Http\Response
     */
    public function __view($view, $data = null)
    {
        if ($data) {
            return view(ROOT_LOGREG_PAGES . $view, $data);
        } else {
            return view(ROOT_LOGREG_PAGES . $view);
        }
    }
}
