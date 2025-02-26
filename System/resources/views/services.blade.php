@extends('layouts.default')

@section('content')
<div class="container py-5 text-center">
    <h4 class="display-4 fw-bold">Gamacare Health Center</h4>
    <h4>Comprehensive Health Care Services</h4>
</div>

<div class="container">
    <div class="container pb-5">
        <p class="lead text-center text-muted">
            At Gamacare Health Center, we prioritize your health and well-being above all else.
            <br>
            With a team of dedicated professionals and state-of-the-art facilities, we are committed to providing you with the highest quality of care.
            Whether you need a routine check-up or specialized treatment, our comprehensive range of services is designed to meet your individual needs.
        </p>
    </div>

    <p class="lead text-center fs-5 fw-semibold">
        Our Professional Help
    </p>
    <hr class="my-2">
    
    <div class="row row-cols-1 row-cols-lg-2 g-4 my-3">
        <div class="col px-5">
            <h2 class="">General Checkups</h2>
            <p class="text-muted">
                Regular checkups are essential for maintaining your health. 
                At Gamacare Health Center, we recommend annual visits to monitor your well-being and catch any potential issues early.
            </p>
        </div>
        <div class="col px-5">
            <h2 class="">Specialist Consultations</h2>
            <p class="text-muted">
                Our team of specialists is here to provide you with the expert care you need. 
                From cardiology to orthopedics, we offer a wide range of consultations. 
                Appointments can be made easily through our front desk or online portal.
        </div>
    </div>

    <hr class="my-2 mb-5">

    <p class="lead text-center fs-5 fw-semibold">
        Services
    </p>

    <div class="container mb-5">
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-3">
                @php
                $options = [
                    ['icon' => 'bi-card-checklist', 'title' => 'Laboratory Tests'],
                    ['icon' => 'bi-file-break', 'title' => 'X-Ray'],
                    ['icon' => 'bi-heart-pulse', 'title' => 'ECG'],
                    ['icon' => 'bi-search-heart', 'title' => '2D Echo'],
                    ['icon' => 'bi-activity', 'title' => 'Ultrasound'],
                    ['icon' => 'bi-droplet-half', 'title' => 'Swab and Blood']
                ];
            @endphp

            @foreach ($options as $option)
                <div class="col p-3">
                    <div class="card card-hover-red border shadow-sm text-dark-emphasis h-100">
                        <div class="card-body">
                            <i class="bi {{ $option['icon'] }} fs-1"></i>
                            <h5 class="card-title fs-6 fs-lg-5 mt-3">{{ $option['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection