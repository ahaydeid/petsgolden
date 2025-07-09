@include('partials.customer.frametop')


@include('partials.customer.secondnav')


<div class="button mb-4" style="margin-top: 105px; margin-left: 80px;">
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
<div class="booking d-flex justify-content-center mb-5">
    <form style="width: 90%; background-color: white; padding: 50px; box-shadow: 2px 2px 13px 0px rgba(168,168,168,0.75);
        -webkit-box-shadow: 2px 2px 13px 0px rgba(168,168,168,0.75);
        -moz-box-shadow: 2px 2px 13px 0px rgba(168,168,168,0.75);">
        <div class="row">
            <h1 class="text-center mb-5 fw-bold">BOOKING FOR SERVICE</h1>
            <div class="col-6 mb-5">
{{-- Customer Data Start --}}
                <div class="customer px-4 py-3" style="background-color: rgb(250, 250, 250);">
                    <h3 class="text-center fw-bold">Customer Data</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold fs-5">Name</label>
                        <input type="text" class="name form-control" id="name" aria-describedby="emailHelp" placeholder="Evelyn">
                    </div>
                    <div class="mb-3">
                        <label for="wanumber" class="form-label fw-bold fs-5">WhatsApp</label>
                        <input type="number" class="wanumber form-control" id="wanumber" aria-describedby="emailHelp" placeholder="08123456789">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold fs-5">Email <i style="opacity: 50%; font-size: 15px;">(Optional)</i></label>
                        <input type="email" class="email form-control" id="email" aria-describedby="emailHelp" placeholder="evelyn@mail.com">
                    </div>
                </div>
{{-- Customer Data End --}}

{{-- Pet Data Start --}}
                <div class="pet mt-3 px-4 py-3" style="background-color: rgb(250, 250, 250);">
                    <h3 class="text-center fw-bold">Pet Data</h3>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-primary fw-bold fs-5 mb-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Pet Type
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cat</a></li>
                        <li><a class="dropdown-item" href="#">Dog</a></li>
                        <li><a class="dropdown-item" href="#">Snake</a></li>
                    </ul>
                    </div>
                    <div class="mb-3">
                        <label for="race" class="form-label fw-bold fs-5">Race <i style="opacity: 50%; font-size: 15px;">(Optional)</i></label>
                        <input type="text" class="race form-control" id="race" aria-describedby="emailHelp" placeholder="Persian">
                    </div>
                    <div class="mb-3">
                        <label for="petname" class="form-label fw-bold fs-5">Pet Name <i style="opacity: 50%; font-size: 15px;">(Optional)</i></label>
                        <input type="text" class="petname form-control" id="petname" aria-describedby="emailHelp" placeholder="Bucky">
                    </div>
                </div>  
{{-- Pet Data End --}}
            </div>
            
            <div class="col-6 mb-5">
{{-- Type Of Service Start --}}
                <div class="customer px-4 py-3" style="background-color: rgb(250, 250, 250);">
                    <h3 class="text-center fw-bold">Type Of Service</h3>
                    <label for="" class="form-label fw-bold fs-5">Main Service</label>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="grooming" id="grooming">
                        <label class="form-check-label" for="exampleCheck1">Grooming</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="bathing" id="bathing">
                        <label class="form-check-label" for="bathing">Bathing</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="vitinjection" id="vitinjection">
                        <label class="form-check-label" for="vitinjection">Vit Injection</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="shaving" id="shaving">
                        <label class="form-check-label" for="shaving">Shaving</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="cuttingnails" id="cuttingnails">
                        <label class="form-check-label" for="cuttingnails">Cutting Nails</label>
                    </div>
                    <div class="mb-3">
                        <label for="additionalreq" class="form-label fw-bold fs-5">Additional Request <i style="opacity: 50%; font-size: 15px;">(Optional)</i></label>
                        <textarea class="additionalreq form-control" name="additionalreq" id="additionalreq" placeholder="Don't spray perfume" style="height: 150px;"></textarea>
                    </div>
 
                </div>
{{-- Type Of Service End --}}

{{-- Time & Address Start --}}
                <div class="customer mt-3 px-4 py-3" style="background-color: rgb(250, 250, 250);">
                    <h3 class="text-center fw-bold">Time & Address</h3>
                    <div class="row">
                        <div class="mb-3 col-6 d-flex">
                            <label for="date" class="form-label me-2 fw-bold fs-5">Date</label>
                            <input type="date" class="date form-control" id="date" aria-describedby="emailHelp"required>
                        </div> 
                        <div class="mb-3 col-6 d-flex">
                            <label for="time" class="form-label me-2 fw-bold fs-5">Time</label>
                            <input type="time" class="time form-control" id="time" aria-describedby="emailHelp"required>
                        </div> 
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold fs-5">Address</label>
                        <textarea name="address" class="address form-control" id="address" placeholder="Alam Sutera, Ruko WoodLake Blok 5, Jl. Lingkar Barat Blok 5 No. 3, Panunggangan Tim., Kec. Pinang, Kota Tangerang, Banten 15143" style="height: 150px;" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="noteaddress" class="form-label fw-bold fs-5">Note <i style="opacity: 50%; font-size: 15px;">(Optional)</i></label>
                        <textarea name="noteaddress" class="noteaddress form-control" id="noteaddress" placeholder="Roadworks are underway on the main road, so it's closed. You can take the detour via the north road." style="height: 150px;"></textarea>
                    </div>
                </div>
{{-- Time & Address End --}}
            </div>
            <div class="row">
                <h4 class="">Total Bill: </h4>
                <h4 class="">Rp <span class="fw-bold fs-1">300.000</span></h4>
            </div>
            <button type="submit" class="btn btn-success fw-bold fs-3 py-1 ">Submit</button>
        </div>
    </form>

</div>

@include('partials.customer.footer')


@include('partials.customer.framedown')