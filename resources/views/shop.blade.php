@include('partials.customer.frametop')


@include('partials.customer.secondnav')


{{-- Tombol Back Start --}}
<div class="button mb-4" style="margin-top: 105px; margin-left: 80px;">
<h1 class="text-center mb-5 fw-bold">PETSGOLDEN STORE</h1>
    <a href="../">
        <button type="button" class="btn text-light fw-bold px-5" style="
            box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            font-size: 25px;
            background-color: #30a9ff;
            border-radius: 50px;">
        Back
    </button>
    </a>
</div>
{{-- Tombol Back End --}}

<div class="mb-5 px-5">
    <div class="booking row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-food.png') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Food</h5>
                    <p class="card-text">Delicious food for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-strap.jpg') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Strap</h5>
                    <p class="card-text">Soft Strap for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-food.png') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Food</h5>
                    <p class="card-text">Delicious food for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-strap.jpg') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Strap</h5>
                    <p class="card-text">Soft Strap for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-food.png') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Food</h5>
                    <p class="card-text">Delicious food for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('assets/img/dog-strap.jpg') }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Dog Strap</h5>
                    <p class="card-text">Soft Strap for your dog</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.customer.footer')


@include('partials.customer.framedown')