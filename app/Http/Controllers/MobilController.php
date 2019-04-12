<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        $categories = mobil::all();
        return view('dashboard.mobil', compact('categories'));
    }

    public function search(Request $request)

    {

        $cari = $request->cari;

        $categories = DB::table('mobil')->where('mobil', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('dashboard.mobil',['categories' => $categories]);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = mobil::all();
        return view('dashboard.mobil.tambah', compact('categories'));


    }

    public function mobil(Request $request)

    {

        // insert data ke table pegawai
	    DB::table('mobil')->insert([
            'id_mobil' => $request->id_mobil,
            'mobil' => $request->mobil,
            'harga' => $request->harga,
            'status' => $request->status,
            'id_merek' => $request->id_merek
            
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('mobil');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */


    public function edit($id_mobil)
    {
        $categories = DB::table('mobil')->where('id_mobil',$id_mobil)->get();
        return view('dashboard.mobil.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('mobil')->where('id_mobil',$request->id_mobil)->update([
            'id_mobil' => $request->id_mobil,
            'mobil' => $request->mobil,
            'harga' => $request->harga,
            'status' => $request->status,
            'id_merek' => $request->id_merek
        ]);
            return redirect('mobil');
    }

    public function destroy($id_mobil)
    {
        DB::table('mobil')->where('id_mobil',$id_mobil)->delete();
        return redirect('mobil');
    }
}
