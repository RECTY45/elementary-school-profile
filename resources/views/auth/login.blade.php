@extends('auth.layouts.index')

@section('content')
    <main>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4 w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('backend/img/logo-sd.png') }}" alt="">
                                <span class="d-none d-lg-block">SDN INP PAJAIANG</span>
                            </a>
                        </div>

                        <x-alert />

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="card mb-3 login-card">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Aplikasi</h5>
                                        <p class="text-center small">Masukkan email dan password untuk masuk.</p>
                                    </div>
    
                                    <form class="row g-3 needs-validation" novalidate>
    
                                        <div class="col-12 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    required>
                                                <div class="invalid-feedback">Email wajib diisi.</div>
                                            </div>
                                        </div>
    
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                            <div class="invalid-feedback">Password wajib diisi.</div>
                                        </div>
    
                                        <div class="col-12 my-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Kenali akun
                                                    saya.</label>
                                            </div>
                                        </div>
    
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                            <div class="credits">
                                Powered by <a href="https://github.com/ryoogenmedia">ryoogen media</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
