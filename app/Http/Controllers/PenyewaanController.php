<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penyewaan;
use Illuminate\Support\Facades\DB;

class PenyewaanController extends Controller
{
    public function index()
    {
        $categories = penyewaan::all();
        return view('dashboard.penyewaan', compact('categories'));
    }

    public function search(Request $request)

    {

        $cari = $request->cari;

        $categories = DB::table('penyewaan')->where('nama', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('dashboard.penyewaan',['categories' => $categories]);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = penyewaan::all();
        return view('dashboard.penyewaan.tambah', compact('categories'));


    }

    public function penyewa(Request $request)

    {

        // insert data ke table pegawai
	    DB::table('penyewaan')->insert([
		    'id_pelanggan' => $request->id_pelanggan,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
            
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('penyewaan');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */


    public function edit($id_pelanggan)
    {
        $categories = DB::table('penyewaan')->where('id_pelanggan',$id_pelanggan)->get();
        return view('dashboard.penyewaan.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('penyewaan')->where('id_pelanggan',$request->id_pelanggan)->update([
            'id_pelanggan' => $request->id_pelanggan,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
            return redirect('penyewaan');
    }

    public function destroy($id_pelanggan)
    {
        DB::table('penyewaan')->where('id_pelanggan',$id_pelanggan)->delete();
        return redirect('penyewaan');
    }
}
