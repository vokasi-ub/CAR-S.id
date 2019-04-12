<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.index', compact('categories'));
    }

    public function search(Request $request)
    {

        $cari = $request->cari;

        $categories = DB::table('pesanan')->where('durasi', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('dashboard.index',['categories' => $categories]);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = Category::all();
        return view('dashboard.master.tambah', compact('categories'));


    }

    public function pesanan(Request $request)

    {

        // insert data ke table pegawai
	    DB::table('pesanan')->insert([
		    'id_pesanan' => $request->id_pesanan,
            'durasi' => $request->durasi,
            'tgl_pesan' => $request->tgl_pesan,
            'tgl_kembali' => $request->tgl_kembali,
            'id_mobil' => $request->id_mobil,
            'id_penyewa' => $request->id_penyewa
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('home');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */


    public function edit($id_pesanan)
    {
        $categories = DB::table('pesanan')->where('id_pesanan',$id_pesanan)->get();
        return view('dashboard.master.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('pesanan')->where('id_pesanan',$request->id_pesanan)->update([
            'id_pesanan' => $request->id_pesanan,
            'durasi' => $request->durasi,
            'tgl_pesan' => $request->tgl_pesan,
            'tgl_kembali' => $request->tgl_kembali,
            'id_mobil' => $request->id_mobil,
            'id_penyewa' => $request->id_penyewa
        ]);
            return redirect('home');
    }

    public function destroy($id_pesanan)
    {
        DB::table('pesanan')->where('id_pesanan',$id_pesanan)->delete();
        return redirect('home');
    }
}
