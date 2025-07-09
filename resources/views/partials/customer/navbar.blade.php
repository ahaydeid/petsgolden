{{-- Awal Navbar --}}
<nav class="d-flex fixed-top justify-content-between align-items-center p-3 ps-5" style="background-color: white; height: 100px;">
    <img src="{{ asset('/assets/img/logo.png') }}" style="width: 150px" alt="Logo"/>
    <div style="margin-right: 200px d-flex justify-content-between">
        <ul class="nav me-5 fw-bold fs-5">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#services">Our Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#contact">Contact</a>
            </li>
            <li class="nav-item justify-content-betwen">
                <a class="nav-link" href="/shop"><button class="btn btn-primary fw-bold">Shop <img class="ms-3 w-25" src="{{ asset('assets/img/cart.png') }}" alt=""> </button></a>
            </li>
        </ul>
    </div>
</nav>
        {{-- Akhir Navbar --}}