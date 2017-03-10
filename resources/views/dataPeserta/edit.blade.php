@extends('master')
@section('title', 'Edit Data Peserta')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Edit Data Peserta</legend>
                    <div class="form-group">
                        <label for="namaPeserta" class="col-lg-2 control-label">Nama Peserta</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="namaPeserta" name="namaPeserta" value="{!! $dataPeserta->namapeserta !!}">
                            <span class="help-block">Masukkan nama peserta yang benar.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jk" class="col-lg-2 control-label">Jenis Kelamin</label>
                        <div class="col-lg-10">
                            @if ($dataPeserta->jk === 'L')
                                <input type="radio" name="jk" value="L" checked> L &nbsp;
                                <input type="radio" name="jk" value="P"> P
                            @else
                                <input type="radio" name="jk" value="L"> L &nbsp;
                                <input type="radio" name="jk" value="P" checked> P    
                            @endif                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tglLahir" class="col-lg-2 control-label">Tanggal Lahir</label>
                        <div class="col-lg-10">
                            <input type="text" name="tglLahir" id="datepicker" value="{!! $dataPeserta->tgllahir !!}">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="asalSekolah" class="col-lg-2 control-label">Asal Sekolah</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="asalSekolah" placeholder="" name="asalSekolah" value="{!! $dataPeserta->asalsekolah !!}">
                            <span class="help-block">Masukkan nama sekolah yang benar.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a class="btn btn-default btn-close" href="{!! action('dataPesertaController@index') !!}">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection