@extends('master')
@section('title', 'Detil Peserta')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $dataPeserta->namapeserta !!}</h2>
                    <p> <strong>{!! $dataPeserta->asalsekolah !!}</strong></p>
                    <p> <strong>Tanggal Lahir</strong>: {!! $dataPeserta->tgllahir !!}</p>
                    <p> {!! $dataPeserta->kelompokumur !!} </p>
                </div>
                
                <a href="{!! action('dataPesertaController@edit', $dataPeserta->slug) !!}" class="btn btn-info">Edit</a>
                
                <form method="post" action="{!! action('dataPesertaController@destroy', $dataPeserta->slug) !!}" class="pull-left">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div>
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </div>
                </form>
                
                <div class="clearfix"></div>
            </div>
    </div>
@endsection