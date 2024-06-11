@extends('master.masterDashboard')

@section('judul')
    Form Buat Profil
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
        <form action="{{ route('profil_admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-4">
                    <label for="email" class="col-md-6 col-form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" autocomplete="email" disabled>

                    @error('email')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>
                
                <div class="col-lg-4">
                    <label for="username" class="col-md-6 col-form-label">{{ __('Username*') }}</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->profile->username ?? '' }}" autocomplete="username">

                    @error('username')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>


                <div class="col-lg-4">
                    <label for="avatar" class="col-md-4 col-form-label">{{ __('Gambar*') }}</label>
                    <input class="form-control" type="file" id="avatar" name="avatar">

                    @error('avatar')
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