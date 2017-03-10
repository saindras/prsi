<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\dataPesertaFormRequest;
use App\dataPeserta;
use dataPeserta;

class dataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPeserta = dataPeserta::all();
        return view('dataPeserta.index', compact('dataPeserta'));
        //return view('dataPeserta.index');
    }

    public function dataPeserta()
    {
        $dataPeserta = dataPeserta::select('idpeserta','namapeserta','jk','tgllahir','asalsekolah')->get();
        return Datatables::of($dataPeserta)->make(true);
        //return Datatables::of(dataPeserta::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataPeserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(dataPesertaFormRequest $request)
    {
        $slug = uniqid();
        $dataPeserta = new dataPeserta(array(
            'namaPeserta' => $request->get('namaPeserta'),
            'jk' => $request->get('jk'),
            'tglLahir' => $request->get('tglLahir'),
            'asalSekolah' => $request->get('asalSekolah'),
            'slug' => $slug
        ));

        $dataPeserta->save();

        return redirect('/halamanInput')->with('status', 'Data berhasil diinputkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $dataPeserta = dataPeserta::whereSlug($slug)->firstOrFail();
        return view('dataPeserta.show', compact('dataPeserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $dataPeserta = dataPeserta::whereSlug($slug)->firstOrFail();
        return view('dataPeserta.edit', compact('dataPeserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug, dataPesertaFormRequest $request)
    {
        $dataPeserta = dataPeserta::whereSlug($slug)->firstOrFail();
        $dataPeserta->namapeserta = $request->get('namaPeserta');
        $dataPeserta->jk = $request->get('jk');
        $dataPeserta->tgllahir = $request->get('tglLahir');
        $dataPeserta->asalsekolah = $request->get('asalSekolah');
        $dataPeserta->save();
        return redirect(action('dataPesertaController@edit', $dataPeserta->slug))->with('status', 'Data peserta berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $dataPeserta = dataPeserta::whereSlug($slug)->firstOrFail();
        $dataPeserta->delete();
        return redirect('/listPeserta')->with('status', 'Data peserta telah dihapus.');
    }
}
