@extends('master')
@section('title', 'halamanInput')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <fieldset>
                    <legend>Pendaftaran Peserta</legend>
                    <div class="form-group">
                        <label for="namaPeserta" class="col-lg-2 control-label">Nama Peserta</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="namaPeserta" placeholder="" name="namaPeserta">
                            <span class="help-block">Masukkan nama lengkap dari peserta.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jk" class="col-lg-2 control-label">Jenis Kelamin</label>
                        <div class="col-lg-10">
                            <input type="radio" name="jk" value="L" checked> L &nbsp;
                            <input type="radio" name="jk" value="P"> P                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tglLahir" class="col-lg-2 control-label">Tanggal Lahir</label>
                        <div class="col-lg-10">
                            <input type="text" name="tglLahir" id="datepicker">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="asalSekolah" class="col-lg-2 control-label">Asal Sekolah</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="asalSekolah" placeholder="" name="asalSekolah">
                            <span class="help-block">Masukkan nama sekolahnya saja.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a class="btn btn-default btn-close" href="{{url()->current()}}">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection