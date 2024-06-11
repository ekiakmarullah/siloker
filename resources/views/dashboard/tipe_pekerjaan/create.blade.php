@extends('master.masterDashboard')

@section('judul')
    Form Tambah Data Tipe Pekerjaan
@endsection

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@push('style')
    
@endpush

@push('script')


@endpush

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <form action="{{ route('tipe_pekerjaan.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-lg">
                    <label for="nama_tipe_pekerjaan" class="col-md-6 col-form-label">{{ __('Nama Tipe Pekerjaan*') }}</label>
                    <input id="nama_tipe_pekerjaan" type="text" class="form-control @error('nama_tipe_pekerjaan') is-invalid @enderror" name="nama_tipe_pekerjaan" value="{{ old('nama_tipe_pekerjaan') }}" autocomplete="nama_tipe_pekerjaan">

                    @error('nama_tipe_pekerjaan')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary my-4" style="background-color: #5D87FF !important; float:right !important;">Simpan<i class="ti ti-brand-telegram mx-2"></i></button>
          </form>
    </div>
</div>
@endsection