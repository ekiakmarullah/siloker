@extends('master.masterHome')

@section('content')


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                @forelse ($dataSlider as $data)

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{asset('lowongan_pekerjaan/'.$data->gambar)}}" alt="{{ $data->slug }}" style="max-width: 1366px !important; height:768px">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">{{ $data->nama_lowongan_pekerjaan }}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $data->nama_pemberi_kerja }}</p>
                                    <a href="{{ route('home.show', $data->slug) }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lamar Pekerjaan</a>
                                    <a href="{{ route('home.pekerjaan') }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Lebih Banyak Pekerjaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @empty

                <p>Data Lowongan Pekerjaan Tidak Ditemukan</p>
                    
                @endforelse
                
                
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <form action="cari">
                                <input type="text" class="form-control border-0" placeholder="Keyword" name="search"/>

                                
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0" name="category">
                                    <option selected disabled>Pilih Kategori</option>
                                    @forelse ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @empty
                                        <p>Data Kategori Tidak Ditemukan...</p>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0" name="location">
                                    <option selected disabled>Pilih Lokasi</option>
                                    @forelse ($lokasi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kampung }}</option>
                                    @empty
                                        <p>Data Lokasi Tidak Ditemukan...</p>
                                    @endforelse
                                    
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{asset('jobentry-1.0.0/img/about-1.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{asset('jobentry-1.0.0/img/about-2.jpg')}}" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{asset('jobentry-1.0.0/img/about-3.jpg')}}" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{asset('jobentry-1.0.0/img/about-4.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Lowongan Pekerjaan</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Semua Lowongan Pekerjaan</h6>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Lowongan Pekerjaan Dari Instagram</h6>
                            </a>
                        </li>
                            
            
                    </ul>
                    <div class="tab-content">
                    @if ($dataLowonganPekerjaan)

                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        @forelse ($dataLowonganPekerjaan as $dataLoker)

                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('lowongan_pekerjaan/'.$dataLoker->gambar_lowongan_pekerjaan)}}" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">{{ $dataLoker->nama_lowongan_pekerjaan }}</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $dataLoker->nama_kampung }}, {{ $dataLoker->nama_kecamatan }}</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $dataLoker->nama_kategori }}</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $dataLoker->besaran_gaji_lowongan_pekerjaan }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href="{{ route('home.show', $item->slug) }}"><i class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary" href="{{ route('home.show', $item->slug) }}">Lamar Sekarang</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Batas Lamaran: {{ $dataLoker->batas_lamaran_pekerjaan }}</small>
                                </div>
                            </div>
                        </div>
                            
                        @empty
                            <p>Data Lowongan Pekerjaan Tidak Ditemukan...</p>
                        @endforelse
                        
                        <a class="btn btn-primary py-3 px-5" href="">Temukan Lebih Banyak Pekerjaan</a>
                    </div>


                        
                    @else

                    <p>Data Lowongan Pekerjaan Tidak Ditemukan...</p>
                        
                    @endif

                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="job-item p-4 mb-4">

                            <div data-behold-id="6HF8q1OCHzrZ2RJpzFuO"></div>
                            <script>
                            (() => {
                                const d=document,s=d.createElement("script");s.type="module";
                                s.src="https://w.behold.so/widget.js";d.head.append(s);
                            })();
                            </script>

                        </div>
                        
                        <a class="btn btn-primary py-3 px-5 my-4" href="https://www.instagram.com/lokersabang15/">Temukan Lebih Banyak Pekerjaan</a>
                    </div>
                        

                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Our Clients Say!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('jobentry-1.0.0/img/testimonial-1.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('jobentry-1.0.0/img/testimonial-2.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('jobentry-1.0.0/img/testimonial-3.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('jobentry-1.0.0/img/testimonial-4.jpg')}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
        

        