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
                    <table class="table table-striped table-hover" id="table-datapeserta">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>JK</th>                                
                                <th>Sekolah</th>
                                <th>Klub</th>                                
                                <th>KU</th>
                                <th>Waktu</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
               @endif 
            </div>
    </div>   
     
@endsection

@push('scripts')
    <script type="text/javascript">
    $(function() {
        var oTable = $('#table-datapeserta').DataTable({
            processing: true,
            serverSide: true,
            pagingType: "full_numbers",
            scrollX: true,
            ajax: {
                url: '{{ url("/listPeserta/get-dataPeserta") }}'
            },
            columns: [
                {data: 'rownum', name: 'rownum',searchable:false},            
                {data: 'namapeserta', name: 'namaPeserta'},
                {data: 'jk', name: 'jk'},                
                {data: 'asalsekolah', name: 'asalSekolah'}, 
                {data: 'namaklub', name: 'namaKlub'},               
                {data: 'kelompokumur', name: 'kelompokUmur'},
                {data: 'waktusebelum', name: 'waktuSebelum'},
                {data: 'nolomba1', name: 'noLomba1'},
                {data: 'nolomba2', name: 'noLomba2'},
                {data: 'nolomba3', name: 'noLomba3'},
                {data: 'nolomba4', name: 'noLomba4'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                    .on('change', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                });
            }
        });
    });
</script>
@endpush