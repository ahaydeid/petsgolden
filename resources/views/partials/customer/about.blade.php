        {{-- Awal About Section --}}
        <section id="about" style="padding: 60px; background-image: url('{{ asset('assets/img/wave.svg') }}');
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;">
            <div class="text-center">
                <h1 class="fw-bold text-light" style="font-size: 50px;">About</h1>
                <hr style="width: 200px; border: white 3px solid; margin: 0 auto;" />
            </div>
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
                    <h2 class="fw-bold text-light">Who we are?</h2>
                    <p class="lh-sm text-light" style="font-size: 30px">
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