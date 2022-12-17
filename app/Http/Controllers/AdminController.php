<?php

namespace App\Http\Controllers;

use App\Reports;
use App\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

const ROOT_ADMIN_PAGES = 'layout.admin.page.';
const ROOT_IMAGE_FOLDER_PATH = 'img/data/';

class AdminController extends Controller
{
    //
    public function index()
    {
        $total_user = User::count();
        $total_lost_item = Reports::count();
        $total_found_item = Reports::where('status', 'found')->count();
        if (session()->get('user.id') == null) {
            return redirect()->route('login.index');
        }
        $user = User::where('id', session()->get('user.id'))->first();
        if ($user->role != 'ADMIN') {
            abort(403);
        }

        $data = [
            'total_user' => $total_user,
            'total_lost_item' => $total_lost_item,
            'total_found_item' => $total_found_item,
            'user' => $user
        ];
        return $this->__view('dashboard.dashboard', $data);
    }

    public function lostnfounditem()
    {
        
        

        $lostnfounditem = Reports::with('user')->orderBy('id', 'desc')->get(); 
        if (session()->get('user.id') == null) {
            return redirect()->route('login.index');
        }
        $user = User::where('id', session()->get('user.id'))->first();
        if ($user->role != 'ADMIN') {
            abort(403);
        }

        $data = [
            'lostnfounditem' => $lostnfounditem,
            'user' => $user
        ];
        return $this->__view('lostnfounditem.lostnfounditem', $data);
    }

    public function edit_data($id)
    {
        $lostnfounditem = Reports::where('id', $id)->first();

        if (session()->get('user.id') == null) {
            return redirect()->route('login.index');
        }
        $user = User::where('id', session()->get('user.id'))->first();
        if ($user->role != 'ADMIN') {
            abort(403);
        }

        $data = [
            'lostnfounditem' => $lostnfounditem,
            'user' => $user
        ];
        return $this->__view('lostnfounditem.editdata', $data);
    }

    public function update_data($id, Request $request)
    {
        $lostnfounditem = Reports::where('id', $id)->first();
        $lostnfounditem->status = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            $path = $file->store(ROOT_IMAGE_FOLDER_PATH);
            $name = $file->getClientOriginalName();
            $format = $file->getClientOriginalExtension();
            $snake_name = Str::snake($request->input('name'));
            $real_file_name = $snake_name . "-" . time() . "." . $format;
            $file->move(ROOT_IMAGE_FOLDER_PATH, $real_file_name);

            $lostnfounditem->image = $real_file_name;
        }

        // $developerType->save();
        // "DPT-" . $name . "-" . Carbon::now()->format('Ymd') . "." . $format;

        $lostnfounditem->update();
        return redirect()->route('admin.lostnfounditem')->with('success', 'Data berhasil diupdate');
    }

    public function delete_data($id)
    {
        $lostnfounditem = Reports::where('id', $id)->first();
        $lostnfounditem->delete();
        return redirect()->route('admin.lostnfounditem')->with('success', 'Data berhasil dihapus');
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
            return view(ROOT_ADMIN_PAGES . $view, $data);
        } else {
            return view(ROOT_ADMIN_PAGES . $view);
        }
    }
}
