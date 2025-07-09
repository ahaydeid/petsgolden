<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/x-icon" href="{{ asset('logo-rounded.ico') }}"/>
        <title>PETSGOLDEN</title>
        <style>
            @keyframes slide-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
            }

            .testi-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
            }

            .animation-slide {
            display: flex;
            width: max-content;
            animation: slide-left 30s linear infinite;
            }
            .card-testimoni {
            flex: 0 0 auto;
            padding: 18px;
            height: 135px;
            width: 650px;
            background-color: white;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.75);
            border-radius: 100px 20px 20px 100px;
            margin-left: 1.5rem;
            display: flex;
            }
        </style>


    </head>
    <body>
        @include('partials.navbar')
        
        @include('partials.hero')

        {{-- Awal About Section --}}
        <section id="about" style="padding: 60px">
            <h1 class="fw-bold" style="font-size: 50px;">About</h1>
            <hr style="width: 200px; border: #f9a700 3px solid" />
            <div class="row" style="margin-top: 80px">
                <div class="col-4 position-relative" style="margin-left: 50px">
                    <div class="position-absolute" style="
                            width: 430px;
                            height: 430px;
                            background-color: #f9a700;
                            z-index: 2;
                            border-radius: 100%;
                            top: -20px;
                            left: 50px;">
                    </div>
                    <img src="{{ asset('assets/img/about.png') }}" style="width:
                    400px; position: relative; z-index: 3;" alt="">
                </div>
                <div class="col-7 pe-5">
                    <h2 class="fw-bold">Who we are?</h2>
                    <p class="lh-sm fst-italic" style="font-size: 30px">
                        PetsGolden offers professional dog and cat grooming
                        services across Jakarta, Tangerang, Bogor, Depok, and
                        Bekasi. Their skilled team delivers top-tier care to
                        keep pets looking their best.
                    </p>
                    <div class="mt-5">
                        <button
                            type="button"
                            class="btn text-light fw-bold px-3"
                            style="
                                font-size: 25px;
                                background-color: #30a9ff;
                                border-radius: 15px;">
                            Professional
                        </button>
                        <button
                            type="button"
                            class="ms-1 btn text-light fw-bold px-3"
                            style="
                                font-size: 25px;
                                background-color: #f9a700;
                                border-radius: 15px;">
                            Caring
                        </button>
                        <button
                            type="button"
                            class="ms-1 btn text-light fw-bold px-3"
                            style="
                                font-size: 25px;
                                background-color: #ff0000;
                                border-radius: 15px;">
                            Mobile
                        </button>
                    </div>
                    <div class="mt-2">
                        <button
                            type="button"
                            class="btn text-light fw-bold px-3"
                            style="
                                font-size: 25px;
                                background-color: #33ce00;
                                border-radius: 15px;">
                            Convenient
                        </button>
                        <button
                            type="button"
                            class="ms-1 btn text-light fw-bold px-3"
                            style="
                                font-size: 25px;
                                background-color: #ff30fc;
                                border-radius: 15px;">
                            Trustworty
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- Akhir About Section --}}

        {{-- Awal Service Section --}}
        <section id="services" style="padding: 60px; margin-top: 100px;">
            <h1 class="fw-bold" style="font-size: 50px;">Our Services</h1>
            <hr style="width: 380px; border: #30A9FF 3px solid" />

            <div class="col position-relative d-flex justify-content-center gap-5">
                <!-- Background lingkaran -->
                <div class="position-absolute"
                    style="width: 400px; height: 400px; background-color: #30A9FF; z-index: 1; border-radius: 100%; top: 150px; right: 600px;">
                </div>
                <div class="position-absolute"
                    style="width: 600px; height: 600px; background-color: #30A9FF; z-index: 2; border-radius: 100%; top: -20px; right: 0; margin-right: -50px;">
                </div>

                <!-- Card 1 -->
                <div class="card position-relative mt-4" style="width: 420px; z-index: 3;">
                    <img src="{{ asset('assets/img/salon.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder; font-size: 40px;">Salon</h5>
                        <p class="card-text lh-2">We care about your pets' comfort — our salon keeps them clean, stylish, and stress-free.</p>
                        <div class="col d-flex gap-1">
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Clean</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Stylish</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Gentle</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Relaxing</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Safe</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card position-relative mt-4" style="width: 420px; z-index: 3;">
                    <img src="{{ asset('assets/img/grooming.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder; font-size: 40px;">Salon</h5>
                        <p class="card-text">Grooming with love — we make your pets look fresh, feel great, and stay healthy.</p>
                        <div class="col d-flex gap-1">
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Fresh</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Neat</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Healthy</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Comfortable</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Loving</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card position-relative mt-4" style="width: 420px; z-index: 3;">
                    <img src="{{ asset('assets/img/food.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder; font-size: 40px;">Pet Needs</h5>
                        <p class="card-text">Everything your pets need, all in one place — from tasty meals to fun toys and daily care</p>
                        <div class="col d-flex gap-1">
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Complete</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Tasty</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Convenient</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Trusted</p>
                            <p class="px-2 py-1 rounded-5" style="font-size: 10px; background-color: #D3D3D3">Daily</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Akhir Service Section --}}

        {{-- Awal Testimonials Section --}}
        <section id="services" style="padding: 60px; margin-top: 80px;">
            <h1 class="fw-bold" style="font-size: 50px;">Testimonials</h1>
            <hr style="width: 380px; border:#f9a700 3px solid" />
            <div class="testi-wrapper overflow-hidden position-relative" style="width: 100%;">  
            <div class="testi mt-5 mb-1 d-flex animation-slide">
                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('assets/img/juna.jpg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Pelayanan PetsGolden luar biasa! Grooming anjing saya jadi lebih rapi dan wangi. Stafnya ramah dan sabar, cocok banget buat hewan kesayangan.”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Junaidi Gunawan</h6>
                    </div>
                </div>
                {{-- Akhir Testi 1 --}}
                {{-- Testi 2 --}}
                <div class="testi2 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="" >
                        <img src="{{ asset('assets/img/renata.jpg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Belanja makanan dan perlengkapan hewan di PetsGolden selalu memuaskan. Lengkap, harga bersahabat, dan pengirimannya cepat sampai rumah!”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Renata Moelok</h6>
                    </div>
                </div>
                {{-- Akhir Testi 2 --}}
                {{-- Testi 3 --}}
                <div class="testi3 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('assets/img/arnold.jpeg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Pelayanan PetsGolden luar biasa! Grooming anjing saya jadi lebih rapi dan wangi. Stafnya ramah dan sabar, cocok banget buat hewan kesayangan.”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Arnold Schwarzenegger</h6>
                    </div>
                </div>
                {{-- Akhir Testi 3 --}}


                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('assets/img/juna.jpg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Pelayanan PetsGolden luar biasa! Grooming anjing saya jadi lebih rapi dan wangi. Stafnya ramah dan sabar, cocok banget buat hewan kesayangan.”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Junaidi Gunawan</h6>
                    </div>
                </div>
                {{-- Akhir Testi 1 --}}
                {{-- Testi 2 --}}
                <div class="testi2 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="" >
                        <img src="{{ asset('assets/img/renata.jpg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Belanja makanan dan perlengkapan hewan di PetsGolden selalu memuaskan. Lengkap, harga bersahabat, dan pengirimannya cepat sampai rumah!”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Renata Moelok</h6>
                    </div>
                </div>
                {{-- Akhir Testi 2 --}}
                {{-- Testi 3 --}}
                <div class="testi3 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('assets/img/arnold.jpeg') }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <p style="font-size: 15px">“Pelayanan PetsGolden luar biasa! Grooming anjing saya jadi lebih rapi dan wangi. Stafnya ramah dan sabar, cocok banget buat hewan kesayangan.”</p>
                        <h6 style="margin-top: -10px; font-weight: bold;">~Arnold Schwarzenegger</h6>
                    </div>
                </div>
                {{-- Akhir Testi 3 --}}
                
            </div>
        </div>
        </section>
        {{-- Akhir Testimonials Section --}}

        {{-- Awal Contact Us --}}
        <section id="services" style="padding: 60px; margin-top: 60px;">
            <h1 class="fw-bold" style="font-size: 50px;">Contact Us</h1>
            <hr style="width: 380px; border:#30A9FF 3px solid" />
            <div class="row mt-5">
                <div class="col-6 mt-5">
                    <p><img src="{{ asset('assets/img/location.png') }}" alt="">Alam Sutera, Ruko WoodLake Blok 5, Jl. Lingkar Barat Blok 5 No. 3, Panunggangan Tim., Kec. Pinang, Kota Tangerang, Banten 15143</p>
                    <p  style="font-size: 25px; font-weight: bold;"><img src="{{ asset('assets/img/wa.png') }}" alt="">081234567890</p>
                </div>
                <div class="col-6">
                    <iframe style="border-radius: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.71376235575!2d106.64815967416563!3d-6.226674360979632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb7a76ff1ad9%3A0x895bb29181a9195!2sPETSGOLDEN%20ALAM%20SUTERA!5e1!3m2!1sen!2sid!4v1751985584565!5m2!1sen!2sid" width="550" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        {{-- Akhir Contact Us --}}


        <footer style="height: 150px; background-color: #30A9FF; display: flex; justify-content: center; align-items: center;">
            <p class="text-center text-light" style="font-size: 20px; margin: 0;">
                &copy; {{ date('Y') }} PetsGolden. All rights reserved.
            </p>
        </footer>

    </body>
</html>
