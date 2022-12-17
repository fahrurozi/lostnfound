<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

const ROOT_USER_PAGES = 'layout.user.page.';

class UserController extends Controller
{
    //
    public function index(){
        if(session()->get('user.id') == null){
            return redirect()->route('login.index');
        }
        $user = User::where('id', session()->get('user.id'))->first();
        // dd(session()->get('user.id'));
        $data = [
            'user' => $user
        ];
        return $this->__view('dashboard.dashboard', $data);
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
        debug($data);
        if ($data) {
            return view(ROOT_USER_PAGES . $view, $data);
        } else {
            return view(ROOT_USER_PAGES . $view);
        }
    }
}
