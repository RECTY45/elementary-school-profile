@extends('layouts.index')

@section('content')
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>TENTANG KAMI</h3>
                <p>Berikut adalah deskripsi tentang sekolah kami.</p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="row">
                    <div style="margin-right: 10px" class="col-6">
                        <img  style="widht: 500px; height: 500px; object-fit: cover;" src="{{ asset('frontend/img/ryoogen/school.jpg') }}" alt="">
                    </div>
                    <div class="col-6">
                        <p>{{ $about ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
