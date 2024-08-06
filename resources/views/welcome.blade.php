@extends('layouts.index')

@section('content')
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @foreach($carousel as $data)
            <div class="hs-item set-bg" data-setbg="{{ asset('storage/' . $data->image) }}">
                <div class="hs-text" style="background-color: rgba(0, 0, 0, 0.473)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">{{ $data->pretitle }}</div>
                                <h2 class="hs-title">{{ $data->title }}</h2>
                                <p class="hs-des">{{ $data->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="counter-content">
                        <h2>{{ $school_detail->name_school ?? '-' }}</h2>
                        <p><i class="fa fa-calendar-o"></i>{{ $school_detail->address ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>EKSTRAKULIKULER</h3>
                <p>Kami menyediakan beberapa ektrakulikuler untuk mendukung kreativitas dan sosial anak.</p>
            </div>
            <div class="row">
                @foreach($ekskul as $data)
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{ asset('storage/' . $data->image) }}" alt>
                        <div class="course-cat">
                            <span>DETAIL</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <h4>{{ $data->name }}</h4>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{ $school_detail->total_teacher ?? '-'}}</h2>
                        <p>PENGAJAR</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{ $school_detail->total_staff ?? '-'}}</h2>
                        <p>STAFF</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{ $school_detail->total_student ?? '-' }}</h2>
                        <p>MURID</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{ $school_detail->total_alumni ?? '-' }}</h2>
                        <p>ALUMNI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>BERITA TERBARU</h3>
                <p>Silahkan baca berita terbaru kami.</p>
            </div>
            <div class="row">
                @foreach($news as $data)
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{ asset('storage/' . $data->image) }}"></div>
                        <div class="blog-content">
                            <h4><a class="text-black" href="#" style="color: black">{{ $data->title }}</a></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> {{ $data->created_at }} </span>
                                <span><i class="fa fa-user"></i> Admin </span>
                            </div>
                            <p>
                                {{ substr($data->description, 0, 100) }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{ asset('frontend/img/ryoogen/school.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/ryoogen/school.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            @foreach($gallery as $data)
            <div class="gallery-item set-bg" data-setbg="{{ asset('storage/' . $data->image) }}">
                <a class="img-popup" href="{{ asset('storage/' . $data->image) }}"><i class="ti-plus"></i></a>
            </div>
            @endforeach
        </div>
    </div>

    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>IKUTI BERITA & INFORMASI KAMI</h3>
                        <p>Ikuti dan dapatkan berita dan informasi terbaru dari kami.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
