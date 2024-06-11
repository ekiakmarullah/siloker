@extends('master.masterDashboard')

@section('judul')
    Data Tipe Pekerjaan
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')
    <a class="btn btn-primary btn-sm mb-3" href="{{ route('tipe_pekerjaan.create') }}">
        <span>
          <i class="ti ti-circle-plus"></i>
        </span>
        <span class="hide-menu">Tambah Data Baru</span>
    </a>

<table id="myTable" class="display" style="width:100%">

    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Tipe Pekerjaan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        
    </tbody>

</table>

@endsection

@push('scripts')
<script>

    $(document).ready(function() {

        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('tipe_pekerjaan.data') !!}',
            columns : [
                {
                    data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false
                },
                {
                    data: 'nama_tipe_pekerjaan', name: 'nama_tipe_pekerjaan'
                },
                {
                    data: 'action', name: 'action', orderable:false
                },
            ]
        });

    });
</script>
@endpush
