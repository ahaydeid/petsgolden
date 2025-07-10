        {{-- Awal Testimonials Section --}}
        <section id="testimonials" style="padding: 60px; margin-top: 80px;">
            <div class="text-center">
                <h1 class="fw-bold" style="font-size: 50px;">Testimonials</h1>
                <hr style="width: 380px; border:#f9a700 3px solid; margin: 0 auto;" />
            </div>
            <div class="testi-wrapper overflow-hidden position-relative" style="width: 100%;">
{{-- SLIDE KIRI --}}
                <div class="testi mt-5 mb-1 d-flex animation-slide">
                @foreach ($testimonials as $item )                    
                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('storage/' . $item->foto) }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <div style="height: 90px; overflow: hidden;">
                            <p style="
                                font-size: 15px;
                                line-height: 1.5em;
                                max-height: 90px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 3; /* Batasi hingga 4 baris (tinggal disesuaikan) */
                                -webkit-box-orient: vertical;
                            ">
                                “{{ $item->testimonial }}”
                            </p>
                        </div>
                        <h6 style="margin-top: -10px; font-weight: bold;">~{{ $item->name }}</h6>
                    </div>

                </div>
                {{-- Akhir Testi 1 --}}
                @endforeach
                @foreach ($testimonials as $item )                    
                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('storage/' . $item->foto) }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <div style="height: 90px; overflow: hidden;">
                            <p style="
                                font-size: 15px;
                                line-height: 1.5em;
                                max-height: 90px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 3; /* Batasi hingga 4 baris (tinggal disesuaikan) */
                                -webkit-box-orient: vertical;
                            ">
                                “{{ $item->testimonial }}”
                            </p>
                        </div>
                        <h6 style="margin-top: -10px; font-weight: bold;">~{{ $item->name }}</h6>
                    </div>
                </div>
                {{-- Akhir Testi 1 --}}
                @endforeach
            </div>
{{-- AKHIR SLIDE KIRI --}}                



{{-- SLIDE KIRI --}}
                <div class="testi mt-5 mb-1 d-flex animation-slide2">
                @foreach ($testimonials->reverse() as $item )                    
                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('storage/' . $item->foto) }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <div style="height: 90px; overflow: hidden;">
                            <p style="
                                font-size: 15px;
                                line-height: 1.5em;
                                max-height: 90px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 3; /* Batasi hingga 4 baris (tinggal disesuaikan) */
                                -webkit-box-orient: vertical;
                            ">
                                “{{ $item->testimonial }}”
                            </p>
                        </div>
                        <h6 style="margin-top: -10px; font-weight: bold;">~{{ $item->name }}</h6>
                    </div>
                </div>
                {{-- Akhir Testi 1 --}}
                @endforeach
                @foreach ($testimonials->reverse() as $item )                    
                {{-- Testi 1 --}}
                <div class="testi1 ms-5 d-flex" style="padding: 18px; height:135px; width:650px; background-color: white; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.75); border-radius: 100px 20px 20px 100px; ">
                    <div class="">
                        <img src="{{ asset('storage/' . $item->foto) }}" style="object-fit:cover; border-radius:50px; height:100px; width: 100px;" alt="">
                    </div>
                    <div class="" style="padding: 5px 30px;">
                        <div style="height: 90px; overflow: hidden;">
                            <p style="
                                font-size: 15px;
                                line-height: 1.5em;
                                max-height: 90px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 3; 
                                -webkit-box-orient: vertical;
                            ">
                                “{{ $item->testimonial }}”
                            </p>
                        </div>
                        <h6 style="margin-top: -10px; font-weight: bold;">~{{ $item->name }}</h6>
                    </div>
                </div>
                {{-- Akhir Testi 1 --}}
                @endforeach
            </div>
{{-- AKHIR SLIDE KIRI --}}                
            </div>
        </section>
        {{-- Akhir Testimonials Section --}}
