@extends('master.masterDashboard')

@section('judul')
    Form Edit Data Lowongan Pekerjaan
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
        <form action="{{ route('lowongan_pekerjaan.update', $lowongan_pekerjaan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="nama" class="col-md col-form-label">{{ __('Judul Lowongan Pekerjaan*') }}</label>
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $lowongan_pekerjaan->nama }}" autocomplete="nama">

                    @error('nama')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="id_pemberi_kerja" class="col-md col-form-label">{{ __('Nama Pemberi Kerja*') }}</label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="id_pemberi_kerja">

                        <option selected disabled>Pilih Pemberi Kerja</option>
                        @forelse ($pemberi_kerja as $item)
                        @if ($item->id === $lowongan_pekerjaan->id_pemberi_kerja)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                        @endif
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @empty
                        <option value="">Data Pemberi Kerja Tidak Ditemukan...</option>
                        @endforelse

                    </select>

                    @error('id_pemberi_kerja')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror

                </div>

                <div class="col-lg-6">
                    <label for="batas_lamaran" class="col-md col-form-label">{{ __('Batas Lamaran*') }}</label>
                    <input id="batas_lamaran" type="text" class="form-control @error('batas_lamaran') is-invalid @enderror" name="batas_lamaran" value="{{ $lowongan_pekerjaan->batas_lamaran }}" autocomplete="batas_lamaran">

                    @error('batas_lamaran')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6">
                    <label for="gambar" class="col-md col-form-label">{{ __('Gambar*') }}</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $lowongan_pekerjaan->gambar }}">

                    @error('gambar')
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="syarat" class="col-md col-form-label">{{ __('Syarat Lowongan Pekerjaan*') }}</label>
                    <textarea name="syarat" id="" cols="30" rows="10" class="form-control" id="text-area">{{ $lowongan_pekerjaan->syarat }}</textarea>

                    @error('syarat')
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="catatan" class="col-md col-form-label">{{ __('Catatan') }}</label>
                    <textarea name="catatan" id="" cols="30" rows="10" class="form-control" id="text-area">{{ $lowongan_pekerjaan->catatan }}</textarea>

                    @error('catatan')
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="deskripsi" class="col-md col-form-label">{{ __('Deskripsi*') }}</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" id="text-area">{{ $lowongan_pekerjaan->deskripsi }}</textarea>

                    @error('deskripsi')
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #5D87FF !important; float:right !important;">Simpan<i class="ti ti-brand-telegram mx-2"></i></button>
          </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/ipgxuvhcxjpgeqpq0yt3d944bfy9em041d6o0fyz5aijin20/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector : "textarea",
    content_css: 'writer',
    theme: "silver",
    plugins: [ 'table powerpaste',
               'lists media',
               'paste' ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify',
    })
</script>
@endpush