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

        $query = $request->input('cari');

        $hasil = category::where('category_name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('master.result', compact('hasil', 'query'));

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        DB::table('table_category')->insert([

            'category_name' => $request->nama_kategori,

            'remarks' => $request->remarks

        ]);



        return redirect('/kategori2');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

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
