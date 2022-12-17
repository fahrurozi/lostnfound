<?php

namespace App\Http\Controllers;

use App\Reports;
use App\User;
use Illuminate\Http\Request;

const ROOT_REPORT_PAGES = 'layout.user.page.form.';

class ReportController extends Controller
{
    //
    public function create_report()
    {
        if (session()->get('user.id') == null) {
            return redirect()->route('login.index')->with('error', 'Silahkan Login Terlebih Dahulu');
        }
        $user = User::where('id', session()->get('user.id'))->first();

        $data = [
            'user' => $user
        ];
        return $this->__view('createreport', $data);
    }

    public function post_report(Request $request)
    {
        // dd(session()->get('user.id'));
        if (session()->get('user.id') == null) {
            return redirect()->route('login.index')->with('error', 'Silahkan Login Terlebih Dahulu');
        }
        // $user = User::where('id', session()->get('user.id'))->first();
        $user = User::find(session()->get('user.id'));

        $report = new Reports();
        $report->user_id = $user->id;
        $report->product_type = $request->product_type;
        $report->brand = $request->brand;
        $report->category = $request->category;
        $report->color = $request->color;
        $report->description = $request->description;
        $report->missing_date = $request->missing_date;
        $report->clock = $request->clock;
        $report->location = $request->location;
        $report->location_name = $request->location_name;
        $report->detail_location = $request->detail_location;
        $report->still_yogyakarta = $request->still_yogyakarta == true ? 1 : 0;
        $report->status = 'lost';
        $report->save();

        $user->country =  $request->country;
        $user->province =  $request->province;
        $user->city =  $request->city;
        $user->district =  $request->district;
        $user->address =  $request->address;
        $user->postal_code =  $request->postal_code;
        $user->update();

        return redirect()->route('dashboard.index')->with('success', 'Report berhasil dibuat');
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
            return view(ROOT_REPORT_PAGES . $view, $data);
        } else {
            return view(ROOT_REPORT_PAGES . $view);
        }
    }
}
