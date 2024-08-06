<footer class="footer-section">
    <div class="container footer-top">
        <div class="row">

            <div class="col-sm-6 col-lg-3 footer-widget">
                <div class="about-widget">
                    <img src="img/logo-light.png" alt>
                    <p>
                        {{ $school_detail->slogan ?? '-' }}
                    </p>
                    <div class="social pt-1">
                        <a href><i class="fa fa-twitter-square"></i></a>
                        <a href><i class="fa fa-facebook-square"></i></a>
                        <a href><i class="fa fa-google-plus-square"></i></a>
                        <a href><i class="fa fa-linkedin-square"></i></a>
                        <a href><i class="fa fa-rss-square"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">USEFUL LINK</h6>
                <div class="dobule-link">
                    <ul>
                        @foreach (config('navbar') as $nav)
                            <li><a href>{{ $nav['title'] }}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <li><a href="https://www.kemdikbud.go.id/">Kemendibud</a></li>
                        <li><a href="https://raporpendidikan.kemdikbud.go.id/login">Rapor</a></li>
                        <li><a href="https://dikti.kemdikbud.go.id/">Dikti</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">POSTINGAN TERATAS</h6>
                <ul class="recent-post">
                    @foreach($news->take(2) as $data)
                    <li>
                        <p>{{ $data->title }}</p>
                        <span><i class="fa fa-clock-o"></i>{{ $data->created_at ?? '-' }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">Kontak</h6>
                <ul class="contact">
                    <li>
                        <p><i class="fa fa-map-marker"></i> {{ $school_detail->address ?? '-' }} </p>
                    </li>
                    <li>
                        <p><i class="fa fa-phone"></i> {{ $school_detail->phone ?? '-' }} </p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope"></i> <a href="ryoogencomunity@gmail.com">
                            {{ $school_detail->email_school ?? '-' }}
                        </a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-clock-o"></i>
                            {{ $school_detail->operational ?? '-'}}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <p>
                Copyright &copy;
                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear());
                </script> SDN INP PAJAIANG | UNITAMA <i class="fa fa-heart-o" aria-hidden="true"></i>
                powered by <a href="https://github.com/ryoogenmedia" target="_blank">Ryoogen Media</a>
            </p>
        </div>
    </div>
</footer>
