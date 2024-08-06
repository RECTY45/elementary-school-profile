@extends('layouts.index')

@section('content')
<section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>BERITA</h3>
                <p>Baca berita terbaru kami.</p>
            </div>
            <div class="row">
                @foreach($news as $data)
                    @if($data->image)
                        <div class="col-lg-4 col-md-6 course-item">
                            <div class="course-thumb">
                                <img src="{{ asset('storage/' . $data->image) }}" alt>
                                <div class="course-cat">
                                    <span>DETAIL</span>
                                </div>
                            </div>
                            <div class="course-info">
                                <h4>{{ $data->title }}</h4>
                                <p>{{ $data->description }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
