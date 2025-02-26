@extends('layouts.default')

@section('content')
<div class="text-white text-center position-relative shadow" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ asset('hero-home.webp') }}') center/cover no-repeat; height: 500px;">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 fw-bold">Welcome to Gamacare</h1>
        <p class="lead">Your trusted partner in health and wellness</p>
        <a href="{{ url('appointments') }}" class="btn btn-primary btn-lg text-white shadow">Book Appointment</a>
    </div>
</div>

<!-- Content -->
<div class="container-fluid">
    <div class="container text-center py-5">
        <div class="container-fluid">
            <h3 class="display-6">Helpful Links</h3>
        </div>
        <div class="row row-cols-3 d-flex justify-content-center">
            <div class="col-auto p-3">
                <a href="./services" class="text-decoration-none">
                    <div class="card card-hover border shadow-sm text-dark-emphasis" style="width: 10rem;">
                        <div class="card-body">
                            <i class="bi bi-building fs-1"></i>
                            <h5 class="card-title mt-3">Services</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto p-3">
                <a href="./about" class="text-decoration-none">
                    <div class="card card-hover border shadow-sm text-dark-emphasis" style="width: 10rem;">
                        <div class="card-body">
                            <i class="bi bi-info-circle fs-1"></i>
                            <h5 class="card-title mt-3">About Us</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto p-3">
                <a href="./contact" class="text-decoration-none">
                    <div class="card card-hover border shadow-sm shadow text-dark-emphasis" style="width: 10rem;">
                        <div class="card-body">
                            <i class="bi bi-telephone fs-1"></i>
                            <h5 class="card-title mt-3">Contact Us</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection