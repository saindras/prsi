@extends('master')
@section('title', 'Detil Peserta')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <div class="content">

        <h1 class="header">{!! $dataPeserta->namapeserta !!}</h1><br>
            

        <div class="list-group">
          <div class="list-group-item">
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">Deskripsi</h4>
              <span class="label label-default">{!! $dataPeserta->tgllahir !!}</span>
              <span class="label label-primary">{!! $dataPeserta->umur !!} Tahun</span>
              <span class="label label-success">{!! $dataPeserta->jk !!}</span>
              <span class="label label-warning">{!! $dataPeserta->kelompokumur !!}</span> 
            </div>
          </div>

          <div class="list-group-separator"></div>
          <div class="list-group-item">
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">Asal Peserta</h4>
              <span class="label label-default">{!! $dataPeserta->asalsekolah !!}</span>
              <span class="label label-primary">{!! $dataPeserta->namaklub !!}</span>
            </div>
          </div>

          <div class="list-group-separator"></div>
          <div class="list-group-item">
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">Catatan Waktu</h4>
              <span class="label label-default">{!! $dataPeserta->waktusebelum !!}</span>
              <span class="label label-primary">{!! $dataPeserta->nolomba1 !!}</span>
                          </div>
          </div>

          <div class="list-group-separator"></div>
          <div class="list-group-item">
            <div class="row-picture">
              <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
            </div>
            <div class="row-content">
              <h4 class="list-group-item-heading">Lainnya</h4>
              <span class="label label-default">{!! $dataPeserta->created_at !!}</span>
              <span class="label label-primary">{!! $dataPeserta->updated_at !!}</span>
              <span class="label label-success">{!! $dataPeserta->slug !!}</span>
              <span class="label label-warning">{!! $dataPeserta->nolomba2 !!}</span>
              <span class="label label-info">{!! $dataPeserta->nolomba3 !!}</span> 
              <span class="label label-danger">{!! $dataPeserta->nolomba4 !!}</span>
            </div>
          </div>          

          <div class="list-group-separator"></div>
        </div>
        
        </div>

        <a class="btn btn-raised btn-default" href="{!! action('dataPesertaController@index') !!}">Back</a>                              
        <a href="{!! action('dataPesertaController@edit', $dataPeserta->slug) !!}" class="btn btn-raised btn-primary">Edit</a>

        <form method="post" action="{!! action('dataPesertaController@destroy', $dataPeserta->slug) !!}" class="pull-right">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div>
                <button type="submit" class="btn btn-raised btn-danger">Delete</button>
            </div>
        </form>

        <div class="clearfix"></div>
    </div>
</div>
@endsection