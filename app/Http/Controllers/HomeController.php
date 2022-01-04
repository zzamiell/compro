<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('master.app')->nest('child', 'home');
    }

    public function aboutus()
    {
        return view('master.app')->nest('child', 'aboutus');
    }

    public function contactus()
    {
        return view('master.app')->nest('child', 'contactus');
    }

    public function service_ai()
    {
        return view('master.app')->nest('child', 'service_ai');
    }

    public function service_ai2()
    {
        return view('master.app')->nest('child', 'service_ai2');
    }

    public function service_hargapedia()
    {
        return view('master.app')->nest('child', 'service_hargapedia');
    }

    public function service_dataextraction()
    {
        return view('master.app')->nest('child', 'service_dataextraction');
    }

    public function test()
    {
        return view('test');
    }

    public function getData()
    {
        $data = DB::table('users')->get();

        return response()->json($data);
    }

    public function addData(Request $request)
    {
        dd($request->all());
        return response()->json('sukses', 200);
    }
}
