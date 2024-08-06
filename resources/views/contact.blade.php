@extends('layouts.index')

@section('content')
<section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>ALAMAT SEKOLAH KAMI</h3>
                <p>Berikut adalah posisi sekolah kami.</p>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.981456080664!2d119.52046277365271!3d-5.106689194870295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb708513f5eb%3A0xbb7ed0d0a643ef71!2sSD%20Negeri%20Pajjaiang!5e0!3m2!1sid!2sid!4v1722846667631!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div style="margin-left: 30px" class="col-6 text-left">
                        <div class="mt-3">
                            <h3>Alamat</h3>
                            <p>{{ $contact->address ?? '-' }}</p>
                        </div>
                        <div class="mt-3">
                            <h3>Nomor Ponsel</h3>
                            <p>{{ $contact->phone ?? '-' }}</p>
                        </div>
                        <div class="mt-3">
                            <h3>Email Sekolah</h3>
                            <p>{{ $contact->phone ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
