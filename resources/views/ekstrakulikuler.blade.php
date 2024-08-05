@extends('layouts.index')

@section('content')
<section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>EKSTRAKULIKULER</h3>
                <p>Lihat ekstrakulikuler kami selengkapnya.</p>
            </div>
            <div class="row">
                @foreach($ekstrakulikuler as $data)
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
@endsection
