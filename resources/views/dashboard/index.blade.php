@extends('master.masterDashboard')

@section('namaHalaman')
<h1>{{ $namaHalaman }}</h1>
@endsection

@section('content')

<div class="row g-4">
    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <a class="cat-item rounded p-4" href="{{ route('lowongan_pekerjaan') }}">
            <i class="fa fa-3x fa-briefcase text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Lowongan Pekerjaan</h6>
            <p class="mb-0">{{ $totalLowonganPekerjaan->count() ?? 'Data Belum Ada...' }} Data Lowongan Pekerjaan</p>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <a class="cat-item rounded p-4" href="{{ route('pemberi_kerja') }}">
            <i class="fa fa-3x fa-building text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Pemberi Kraja</h6>
            <p class="mb-0">{{ $totalPemberiKerja->count() ?? 'Data Belum Ada...' }} Data Pemberi Kerja</p>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <a class="cat-item rounded p-4" href="{{ route('lokasi.index') }}">
            <i class="fa fa-3x fa-compass text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Lokasi</h6>
            <p class="mb-0">{{ $totalLokasi->count() ?? 'Data Belum Ada...' }}</p>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <a class="cat-item rounded p-4" href="{{ route('kategori.index') }}">
            <i class="fa fa-3x fa-clock text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Kategori Pekerjaan</h6>
            <p class="mb-0">{{ $totalTipePekerjaan->count() ?? 'Data Belum Ada...' }}</p>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <a class="cat-item rounded p-4" href="#">
            <i class="fa fa-3x fa-address-card text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Profil Admin</h6>
            <p class="mb-0">{{ $totalProfilAdmin->count() ?? 'Data Belum Ada...' }}</p>
        </a>
    </div>

    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <a class="cat-item rounded p-4" href="#">
            <i class="fa fa-3x fa-user text-primary mb-4"></i>
            <h6 class="mb-3">Total Data Admin</h6>
            <p class="mb-0">{{ $totalAdmin->count() ?? 'Data Belum Ada...' }}</p>
        </a>
    </div>
</div>

@endsection

@push('script')

@endpush