<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merk;
use Illuminate\Support\Facades\DB;

class MerkController extends Controller
{
    public function index()
    {
        $categories = merk::all();
        return view('dashboard.merk', compact('categories'));
    }

    public function search(Request $request)

    {

        $cari = $request->cari;

        $categories = DB::table('merek')->where('merek', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('dashboard.merk',['categories' => $categories]);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = merk::all();
        return view('dashboard.merk.tambah', compact('categories'));


    }

    public function merk(Request $request)

    {

        // insert data ke table pegawai
	    DB::table('merek')->insert([
		    'id_merek' => $request->id_merek,
            'merek' => $request->merek
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('merk');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */


    public function edit($id_merek)
    {
        $categories = DB::table('merek')->where('id_merek',$id_merek)->get();
        return view('dashboard.merk.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('merek')->where('id_merek',$request->id_merek)->update([
            'id_merek' => $request->id_merek,
            'merek' => $request->merek
        ]);
            return redirect('/merk');
    }

    public function destroy($id_merek)
    {
        DB::table('merek')->where('id_merek',$id_merek)->delete();
        return redirect('merk');
    }
}
