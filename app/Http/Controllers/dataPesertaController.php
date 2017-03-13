<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\dataPesertaFormRequest;
use App\dataPeserta;
use Yajra\Datatables\Datatables;
use App\DataTables\dataPesertaDataTable;
use DB;

class dataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /*public function index(dataPesertaDataTable $dataTable)
    {
        return $dataTable->render('dataPeserta.index');
    }*/

    public function index()
    {
        $dataPeserta = dataPeserta::all();
        return view('dataPeserta.index', compact('dataPeserta'));        
    }

    //Datatables function
    public function getDataPeserta(Request $request)
    {
        //$dataPeserta = dataPeserta::select('idpeserta','namapeserta','jk','tgllahir','asalsekolah','umur','kelompokumur')->get();
        //return Datatables::of($dataPeserta)->make(true);
        //return Datatables::eloquent($dataPeserta)->make(true);
        
        //return Datatables::of(dataPeserta::query())->make(true);
        
        DB::statement(DB::raw('set @rownum=0'));
        $dataPeserta = dataPeserta::select([
            DB::raw('@rownum  := @rownum  + 1 AS rownum'),            
            'namapeserta',
            'jk',            
            'asalsekolah', 
            'namaklub',           
            'kelompokumur',
            'waktusebelum',
            'nolomba1',
            'nolomba2',
            'nolomba3',
            'nolomba4',
            'slug']);
        $datatables = Datatables::of($dataPeserta);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }
        
        return Datatables::of($dataPeserta)
            ->addColumn('action', function ($dataPeserta) {
                return '<a href="/detilPeserta/'.$dataPeserta->slug.'" class="btn btn-xs btn-primary"><i class="material-icons">mode_edit</i>Edit</a>';
            })
            ->editColumn('namapeserta', '{{$namapeserta}}')            
            ->make(true);
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
            'slug' => $slug,
            'umur' => $request->get('umur'),
            'kelompokumur' => $request->get('kelompokUmur'),
            'namaklub' => $request->get('namaKlub'),
            'waktusebelum' => $request->get('waktuSebelum'),
            'nolomba1' => $request->get('noLomba1'),
            'nolomba2' => $request->get('noLomba2'),
            'nolomba3' => $request->get('noLomba3'),
            'nolomba4' => $request->get('noLomba4'),            
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
        $dataPeserta->umur = $request->get('umur');
        $dataPeserta->kelompokumur = $request->get('kelompokUmur');
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
