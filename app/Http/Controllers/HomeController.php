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

        $data['data'] = DB::table('master_data')
            ->get();

        return view('master.app')->nest('child', 'service_dataextraction', $data);
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

    public function adddData(Request $request)
    {
        dd($request->all());
        return response()->json('sukses', 200);
    }

    public function manageextraction()
    {
        $data['data'] = DB::table('master_data')
            ->get();

        return view('admin.index', $data);
    }

    public function addData(Request $request)
    {
        // dd($request->all());
        try {
            $data = array(
                'nama_data' => $request->data,
                'deskripsi' => $request->deskripsi,
            );

            $insert = DB::table('master_data')->insert($data);

            if ($insert) {
                return redirect()->route('manageextraction')->with('data', 'Berhasil tambah data');
            } else {
                return redirect()->route('manageextraction')->with('fail', 'Terjadi Kesalahan Sistem, Silahkan Coba Lagi');
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
    public function deletedata(Request $request, $id)
    {
        try {
            $data = array(
                'nama_data' => $request->data,
                'deskripsi' => $request->deskripsi,
            );

            $delete = DB::table('master_data')->where('id', $id)->delete();

            $data['message'] = "Ala kadar";
            return json_encode($data);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
