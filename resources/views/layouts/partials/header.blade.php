<header class="header-section">
    <div class="container">

        <a href="#" class="site-logo"><img src="{{ asset('frontend/img/logo.png') }}" alt></a>

        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>

        <div class="header-info">
            <div class="hf-item">
                <i class="fa fa-clock-o"></i>
                <p><span>Kegiatan Sekolah : </span>{{ $school_detail->operational }}</p>
            </div>

            <div class="hf-item">
                <i class="fa fa-map-marker"></i>
                <p><span>Alamat : </span>{{ $school_detail->address }}</p>
            </div>
        </div>
    </div>
</header>
