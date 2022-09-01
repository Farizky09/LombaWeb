@extends('layouts.master')
@section('content')
    <section id="home" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-2 fw-bold" data-aos="fade-up">Selamat Datang di <span class="text-brand">SMKN 6 JEMBER.</span></h1>
                    <h4 data-aos="fade-up" data-aos-delay="100" class="mt-3 mb-5">Salah satu pendidikan dengan jenjang SMK di Tanggul Kulon</h4>
                    @if (Auth::check())
                    <div data-aos="fade-up" data-aos-delay="200"><a href="/login" class="btn btn-brand">{{ Auth::user()->name }}</a></div>
                    @else
                    <div data-aos="fade-up" data-aos-delay="200"><a href="/login" class="btn btn-brand">Login</a></div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler -->
    <section id="ekstrakurikuler" class="section-padding section-connector">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="setion-title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h1>EKSTRAKURIKULER</h1>
                        <p>Ekstrakurikuler adalah kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah atau universitas, umumnya di luar jam belajar kurikulum standar. Kegiatan-kegiatan ini ada pada setiap jenjang pendidikan dari sekolah dasar sampai universitas.</p>
                        <div class="line"></div>
                    </div>
                    
                </div>
            </div>
            <div class="row gy-4 text-center mb-3">
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service py-4 px-3 border">                        
                        <img src="{{ asset('index/images/pramuka.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Pramuka</h5>
                        <p>"Pramuka" merupakan singkatan dari Praja Muda Karana, yang memiliki arti Jiwa Muda yang Suka Berkarya.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/paskibra.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">PASKIBRA</h5>
                        <p>Pasukan Pengibar Bendera Pusaka dengan tugas utamanya untuk mengibarkan dan menurunkan Bendera.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service py-4 px-3 border">                    
                        <img src="{{ asset('index/images/pmr.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Palang Merah Remaja</h5>
                        <p>Palang Merah Remaja adalah wadah pembinaan dan pengembangan anggota remaja PMI.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/basket.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Basket</h5>
                        <p>Bola basket adalah olahraga bola berkelompok yang terdiri dari dua tim dengan masing-masing tim berisi lima orang.</p>                        
                    </div>
                </div>
            </div>
            <div class="row gy-4 text-center mb-3">
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service py-4 px-3 border">                        
                        <img src="{{ asset('index/images/panduan_suara.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Paduan Suara</h5>
                        <p>Gabungan sejumlah penyanyi yang mengkombinasikan beragam jenis suara ke dalam suatu harmoni.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/sepak_bola.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Sepak Bola</h5>
                        <p>Permainan dengan menggiring bola yang memiliki tujuan untuk memasukkan bola ke gawang tim lawan. </p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service py-4 px-3 border">                    
                        <img src="{{ asset('index/images/futsal.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Futsal</h5>
                        <p>Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/voli.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Voli</h5>
                        <p>Olahraga yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain.</p>                        
                    </div>
                </div>
            </div>
            <div class="row gy-4 text-center">
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service py-4 px-3 border">                        
                        <img src="{{ asset('index/images/tari.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Teater dan Kesenian</h5>
                        <p>Seni teater adalah jenis kesenian pertunjukan drama yang dipentaskan di atas panggung.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/remas.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Remaja Masjid</h5>
                        <p>Perkumpulan pemuda masjid yang melakukan aktivitas sosial dan ibadah di lingkungan suatu masjid.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service py-4 px-3 border">                    
                        <img src="{{ asset('index/images/tata_boga.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">Tata Boga</h5>
                        <p>Keahlian terkait dengan seni dalam menyiapkan, memasak, dan menghidangkan makanan siap saji.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service py-4 px-3 border">
                        <img src="{{ asset('index/images/english_club.jpg') }}" class="rounded-2" alt="">
                        <h5 class="mt-4">English Club</h5>
                        <p>Peserta didik dalam menyalurkan minat dan bakat serta pengetahuan di bidang Bahasa Inggris.</p>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="section-padding section-connector">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="setion-title text-center">
                        <h1>Gallery</h1>
                        <p>Dokumentasi SMKN 6 JEMBER.</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="project">
                        <img src="{{ asset('index/images/1.jpg') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/1.jpg') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="project">
                        <img src="{{ asset('index/images/2.jpg') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/2.jpg') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="project">
                        <img src="{{ asset('index/images/3.jpg') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/3.jpg') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="project">
                        <img src="{{ asset('index/images/4.JPG') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/4.JPG') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="project">
                        <img src="{{ asset('index/images/5.JPG') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/5.JPG') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="project">
                        <img src="{{ asset('index/images/6.JPG') }}" alt="">
                        <div class="content">
                            <a href="{{ asset('index/images/6.JPG') }}" data-fancybox="gallery" class="btn btn-outline-light">View Photo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>    

    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-4">
                        <h4><a href="#" class="text-white">SMKN 6 JEMBER</a></h4>
                        <p>Salah satu pendidikan dengan jenjang SMK di Tanggul Kulon</p>
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item">
                                <a class="social-icon" href="#"><i class="ri-dribbble-line"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="social-icon" href="#"><i class="ri-github-line"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="social-icon" href="#"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="social-icon" href="#"><i class="ri-youtube-line"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 ms-auto">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="https://www.instagram.com/smkn6jember/">Instagram</a></li>
                            <li><a href="https://www.facebook.com/SMKNegeri6Jember/">Facebook</a></li>                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Contact</h4>
                        <ul>
                            <li>Email: smkn6.jember@yahoo.com</li>
                            <li>Phone: 0336-441347</li>
                            <li>Address: Kec. Tanggul, Jember</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="mb-0">&#169; SMK 6 JEMBER</p>
                    </div>                    
                </div>
            </div>
        </div>
    </footer>
@endsection