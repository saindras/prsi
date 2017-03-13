@extends('master')
@section('title', 'halamanInput')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                @foreach ($errors->all() as $error)                    
                    <div class="alert alert-dismissible alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $error }}</strong>
                      Change a few things up and try submitting again.
                    </div>
                @endforeach
                @if (session('status'))                    
                    <div class="alert alert-dismissible alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <fieldset>
                    <legend>Pendaftaran Peserta</legend>
                    <div class="form-group">
                        <label for="namaPeserta" class="col-lg-2 control-label">Nama Peserta</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="namaPeserta" placeholder="" name="namaPeserta">
                            <span class="help-block">Masukkan nama lengkap peserta.</span>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-2 control-label">Jenis Kelamin</label>
                        <div class="col-md-10">
                            <div class="radio radio-primary">
                                <label>
                                    <input type="radio" name="jk" id="optionsRadios1" value="L" checked="">Laki-laki                                
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <label>
                                    <input type="radio" name="jk" id="optionsRadios2" value="P"> Perempuan                               
                                </label>
                            </div>
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label for="tglLahir" class="col-lg-2 control-label">Tanggal Lahir</label>
                        <div class="col-lg-10">
                            <input type="text" name="tglLahir" id="datepicker" class="form-control">
                            <span class="help-block">Masukkan tanggal lahir peserta.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="umur" class="col-lg-2 control-label">Umur</label>
                        <div class="col-lg-10">                            
                            <input readonly type="text" name="umur" id="umur" class="form-control">
                            <span class="help-block">Silakan ubah tanggal lahir apabila ingin mengubah umur.</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelompokUmur" class="col-lg-2 control-label">Kelompok Umur</label>
                        <div class="col-lg-10">
                            <input readonly type="text" name="kelompokUmur" id="kelompokumur" class="form-control">
                            <span class="help-block">Silakan ubah tanggal lahir apabila ingin mengubah kelompok umur.</span>                          
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="asalSekolah" class="col-lg-2 control-label">Asal Sekolah</label>
                        <div class="col-lg-10">
                            <select name="asalSekolah" id="cb-asalSekolah" class="form-control">
                            <optgroup label="TK">
                                <option value="TK AURA SUKMA INSANI">TK AURA SUKMA INSANI</option>
                                <option value="TK LILA CITA">TK LILA CITA</option>
                                <option value="TK LAB UNDIKSHA">TK LAB UNDIKSHA</option>
                                <option value="TK MUTIARA">TK MUTIARA</option>
                                <option value="TK KARTIKA">TK KARTIKA</option>
                            </optgroup>
                            <optgroup label="SD/MIS">
                                <option value="MIS TERPADU MARDLATILLAH">MIS TERPADU MARDLATILLAH</option>
                                <option value="SD MUTIARA">SD MUTIARA</option>
                                <option value="SD KAMPUNG KAJANAN">SD KAMPUNG KAJANAN</option>
                                <option value="SD KARYA">SD KARYA</option>
                                <option value="SD N 5 JINENG DALEM">SD N 5 JINENG DALEM</option>
                                <option value="SD N 1 PAKET AGUNG">SD N 1 PAKET AGUNG</option>
                                <option value="SD N PENGLATAN">SD N PENGLATAN</option>
                             </optgroup>
                             <optgroup label="LAINNYA">
                                <option value="LUAR BULELENG">LUAR BULELENG</option>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                             </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="waktuSebelum" class="col-lg-2 control-label">Waktu</label>
                        <div class="col-lg-10">
                            <input type="text" id="timeselector" name="waktuSebelum">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="namaKlub" class="col-lg-2 control-label">Nama Klub</label>
                        <div class="col-lg-10">
                            <select name="namaKlub" id="cb-namaKlub">
                              <optgroup label="SC">
                                <option value="MOLA-MOLA SC">MOLA-MOLA SC</option>
                                <option value="BINA SAKTI SC">BINA SAKTI SC</option>
                                <option value="DOLPHIN SC">DOLPHIN SC</option>
                                <option value="MERPATI LAUT SC">MERPATI LAUT SC</option>
                                <option value="GARUDA SC">GARUDA SC</option>
                              </optgroup>
                              <optgroup label="LAINNYA">
                                <option value="LUAR BULELENG">LUAR BULELENG</option>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                              </optgroup>                             
                            </select>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="noLomba1" class="col-lg-2 control-label">Nomor Perlombaan 1</label>
                        <div class="col-lg-10">                            
                            <select name="noLomba1" id="cb-noLomba1">
                            <optgroup label="KU. I">
                                <option value="50 M GAYA BEBAS" selected>50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. II">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. III">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. IV">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. V">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>                                
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>                                
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>                                
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. PEMULA">
                                <option value="25 M GAYA BEBAS" >25 M GAYA BEBAS</option>
                                <option value="25 M GAYA DADA">25 M GAYA DADA</option>
                                <option value="25 M GAYA PUNGGUNG">25 M GAYA PUNGGUNG</option>
                                <option value="25 M GAYA KUPU-KUPU">25 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="noLomba2" class="col-lg-2 control-label">Nomor Perlombaan 2</label>
                        <div class="col-lg-10">                            
                            <select name="noLomba2" id="cb-noLomba2">
                            <optgroup label="LAINNYA">
                                <option value="TIDAK ADA" selected>TIDAK ADA</option>                                
                            </optgroup>
                            <optgroup label="KU. I">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. II">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. III">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. IV">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. V">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>                                
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>                                
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>                                
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. PEMULA">
                                <option value="25 M GAYA BEBAS" >25 M GAYA BEBAS</option>
                                <option value="25 M GAYA DADA">25 M GAYA DADA</option>
                                <option value="25 M GAYA PUNGGUNG">25 M GAYA PUNGGUNG</option>
                                <option value="25 M GAYA KUPU-KUPU">25 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="noLomba3" class="col-lg-2 control-label">Nomor Perlombaan 3</label>
                        <div class="col-lg-10">                            
                            <select name="noLomba3" id="cb-noLomba3">
                            <optgroup label="LAINNYA">
                                <option value="TIDAK ADA" selected>TIDAK ADA</option>                                
                            </optgroup>
                            <optgroup label="KU. I">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. II">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. III">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. IV">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. V">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>                                
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>                                
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>                                
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. PEMULA">
                                <option value="25 M GAYA BEBAS" >25 M GAYA BEBAS</option>
                                <option value="25 M GAYA DADA">25 M GAYA DADA</option>
                                <option value="25 M GAYA PUNGGUNG">25 M GAYA PUNGGUNG</option>
                                <option value="25 M GAYA KUPU-KUPU">25 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="noLomba4" class="col-lg-2 control-label">Nomor Perlombaan 4</label>
                        <div class="col-lg-10">                            
                            <select name="noLomba4" id="cb-noLomba4">
                            <optgroup label="LAINNYA">
                                <option value="TIDAK ADA" selected>TIDAK ADA</option>                                
                            </optgroup>
                            <optgroup label="KU. I">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. II">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="200 M GAYA BEBAS">200 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="200 M GAYA DADA">200 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. III">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. IV">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>
                                <option value="100 M GAYA BEBAS">100 M GAYA BEBAS</option>
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>
                                <option value="100 M GAYA DADA">100 M GAYA DADA</option>
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>
                                <option value="100 M GAYA PUNGGUNG">100 M GAYA PUNGGUNG</option>
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. V">
                                <option value="50 M GAYA BEBAS">50 M GAYA BEBAS</option>                                
                                <option value="50 M GAYA DADA">50 M GAYA DADA</option>                                
                                <option value="50 M GAYA PUNGGUNG">50 M GAYA PUNGGUNG</option>                                
                                <option value="50 M GAYA KUPU-KUPU">50 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            <optgroup label="KU. PEMULA">
                                <option value="25 M GAYA BEBAS" >25 M GAYA BEBAS</option>
                                <option value="25 M GAYA DADA">25 M GAYA DADA</option>
                                <option value="25 M GAYA PUNGGUNG">25 M GAYA PUNGGUNG</option>
                                <option value="25 M GAYA KUPU-KUPU">25 M GAYA KUPU-KUPU</option>
                            </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button style="float:right" type="submit" class="btn btn-raised btn-primary">Submit</button>
                            <a style="float:right" class="btn btn-raised btn-default" href="{!! action('dataPesertaController@index') !!}">Cancel</a>
                            
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection