@extends('layouts.default')

@section('content')
<div class="container my-5">
    <h5 class="display-5 fw-semibold">Schedule a visit</h5>
    <div class="container pt-3">
        <div class="row row-cols-1 g-2">
            <div class="col d-flex">
                <div class="me-3 d-flex align-items-center">
                    <i class="bi bi-hospital text-muted"></i>
                </div>
                <div class="flex-fill">
                    <span class="text-muted">
                        Amparo
                        0917 560 3725Subdivision, 635 Malanting, cor Binayuyo, Novaliches, Caloocan,
                        1425 Metro Manila
                    </span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="me-3 d-flex align-items-center">
                    <i class="bi bi-pin-map text-muted"></i>
                </div>
                <div class="flex-fill">
                    <span class="text-muted">P3XH+W2 Caloocan, Metro Manila</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="me-3 d-flex align-items-center">
                    <i class="bi bi-telephone text-muted"></i>
                </div>
                <div class="flex-fill">
                    <span class="text-muted">0917 560 3725</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="card shadow">
        <div class="card-body px-4 px-sm-5 py-5">
            <div class="row row-cols-12 d-flex">
                <div class="col col-12 col-sm-6 pe-0 pe-sm-5">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-envelope-paper fs-4 me-3"></i>
                        <h3 class="card-title fw-semibold py-3">Contact us</h3>
                    </div>
    
                    <p class="text-muted">
                        We are here to help you with any questions or concerns you may have.
                        <br>
                        Please feel free to reach out to us.
                    </p>
    
                    <form accept="POST" action="#">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
    
                    </form>
                </div>
    
                <div class="col ratio ratio-16x9 mt-sm-0 mt-5">
                    <iframe class="border"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.341915682015!2d121.07501067591882!3d14.749756785754457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b132a78f80f7%3A0xeca128dc4aa3cc3d!2sGammaCare%20Medical%20Services%20Inc.!5e0!3m2!1sen!2sph!4v1739034464784!5m2!1sen!2sph"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection