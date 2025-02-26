@extends('layouts.default')

@section('content')
<div class="text-white text-center position-relative shadow"
    style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3)), url('{{ asset('hero-appointments.webp') }}') center/cover no-repeat; height: 300px;">
    <div class="container position-absolute top-50 start-20 translate-left">
        <h1 class="fw-bold">Your Health, Our Priority</h1>
        <p class="lead">Comprehensive Care for a healthier tomorrow.</p>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="container">
                        <div class="container text-center pt-5">
                            <h3 class="fw-semibold">Pick your consultation type:</h3>
                        </div>
                        <div class="container d-flex justify-content-center text-center mb-5 w-100 w-lg-50">
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
                                    <label class="col p-3 user-select-none">
                                        <input type="checkbox" class="card-checkbox d-none">
                                        <div
                                            class="card card-hover-red-outline border border-1 shadow-sm text-dark-emphasis h-100">
                                            <div class="card-body">
                                                <i class="bi {{ $option['icon'] }} fs-1"></i>
                                                <h5 class="card-title fs-6 fs-lg-5 mt-3">{{ $option['title'] }}</h5>
                                            </div>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container py-3 px-5">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check fs-4 me-3"></i>
                            <h3 class="card-title fw-semibold py-3">Appointment Details</h3>
                        </div>

                        <p class="text-muted">Please fill out the form below to book your appointment. Our team will get
                            back to
                            you shortly to confirm the details.</p>

                        <form accept="POST" action="#">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Name" required>
                                <label for="name">Name</label>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone" required>
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="date" placeholder="Date" required>
                                        <label for="date">Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="time" placeholder="Time" required>
                                        <label for="time">Time</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message"
                                    placeholder="Any additional request or comments..." rows="3" style="height: 8rem;"
                                    required></textarea>
                                <label for="message">Any request or comments...</label>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection