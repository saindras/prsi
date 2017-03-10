@extends('master')
@section('title', 'List Peserta')
@section('content')

   <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> List Peserta </h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($dataPeserta->isEmpty())
                    <p>Data peserta kosong.</p>
                @else
                    <table class="table" id="table-datapeserta">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Peserta</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Asal Sekolah</th>
                            </tr>
                        </thead>
                    </table>
                @endif
            </div>
    </div>   

@endsection

@section('scripts') 
    <script type="text/javascript">
    $(function() {
        var oTable = $('#table-datapeserta').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/listPeserta.data") }}'
            },
            columns: [
            {data: 'idpeserta', name: 'idPeserta'},
            {data: 'namapeserta', name: 'namaPeserta'},
            {data: 'jk', name: 'jk'},
            {data: 'tgllahir', name: 'tglLahir'},
            {data: 'asalsekolah', name: 'asalSekolah'},
        ],
        });
    });
</script>
@endsection