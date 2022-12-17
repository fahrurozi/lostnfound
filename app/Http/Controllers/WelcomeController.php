<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


const ROOT_WELCOME_PAGES = 'layout.user.';

class WelcomeController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->__view('welcome');
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
            return view(ROOT_WELCOME_PAGES . $view, $data);
        } else {
            return view(ROOT_WELCOME_PAGES . $view);
        }
    }
}
