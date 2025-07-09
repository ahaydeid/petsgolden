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
<div class="booking d-flex justify-content-center" style="margin-bottom: 150px">
<form method="POST" action="" style="
    width: 90%;
    background-color: white;
    padding: 50px;
    box-shadow: 2px 2px 13px rgba(168,168,168,0.75);">
    @csrf

    <div class="row">
        <h1 class="text-center mb-5 fw-bold">BOOKING FOR SERVICE</h1>

        <!-- LEFT SIDE -->
        <div class="col-6 mb-5">
            <!-- Customer Data -->
            <div class="customer px-4 py-3" style="background-color: #FAFAFA;">
                <h3 class="text-center fw-bold">Customer Data</h3>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold fs-5">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Evelyn" >
                    {{-- required --}}
                </div>

                <div class="mb-3">
                    <label for="wa_number" class="form-label fw-bold fs-5">WhatsApp</label>
                    <input type="number" name="wa_number" class="form-control" id="wa_number" placeholder="08123456789" >
                    {{-- required --}}
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold fs-5">Email <i class="text-muted fs-6">(Optional)</i></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="evelyn@mail.com">
                </div>

                <!-- Location Dropdown -->
                <div class="mb-3">
                    <label for="branch" class="form-label fw-bold fs-5">Service Branch</label>
                    <select name="branch" id="branch" class="form-select" >
                        {{-- required --}}
                        <option value="" disabled selected>Select a branch</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                    </select>
                </div>
            </div>

            <!-- Pet Data -->
            <div class="pet mt-3 px-4 py-3" style="background-color: #FAFAFA;">
                <h3 class="text-center fw-bold">Pet Data</h3>

                <div class="mb-3">
                    <label for="pet_type" class="form-label fw-bold fs-5">Pet Type</label>
                    <select name="pet_type" id="pet_type" class="form-select" >
                        {{-- required --}}
                        <option value="" disabled selected>Select pet type</option>
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Snake">Snake</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="race" class="form-label fw-bold fs-5">Race <i class="text-muted fs-6">(Optional)</i></label>
                    <input type="text" name="race" class="form-control" id="race" placeholder="Persian">
                </div>

                <div class="mb-3">
                    <label for="pet_name" class="form-label fw-bold fs-5">Pet Name <i class="text-muted fs-6">(Optional)</i></label>
                    <input type="text" name="pet_name" class="form-control" id="pet_name" placeholder="Bucky">
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-6 mb-5">
            <!-- Type Of Service -->
            <div class="customer px-4 py-3" style="background-color: #FAFAFA;">
                <h3 class="text-center fw-bold">Type Of Service</h3>
                <label class="form-label fw-bold fs-5">Main Service</label>

                <!-- Checkboxes -->
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input service-checkbox" name="services[]" value="Grooming" data-price="200000" id="grooming">
                    <label class="form-check-label" for="grooming">Grooming</label>
                </div>

                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input service-checkbox" name="services[]" value="Bathing" data-price="100000" id="bathing">
                    <label class="form-check-label" for="bathing">Bathing</label>
                </div>

                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input service-checkbox" name="services[]" value="Vit Injection" data-price="50000" id="vitinjection">
                    <label class="form-check-label" for="vitinjection">Vit Injection</label>
                </div>

                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input service-checkbox" name="services[]" value="Shaving" data-price="50000" id="shaving">
                    <label class="form-check-label" for="shaving">Shaving</label>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input service-checkbox" name="services[]" value="Cutting Nails" data-price="50000" id="cuttingnails">
                    <label class="form-check-label" for="cuttingnails">Cutting Nails</label>
                </div>

                <!-- Additional Request -->
                <div class="mb-3">
                    <label for="additional_request" class="form-label fw-bold fs-5">Additional Request <i class="text-muted fs-6">(Optional)</i></label>
                    <textarea name="additional_request" class="form-control" id="additional_request" style="height: 150px;" placeholder="Don't spray perfume"></textarea>
                </div>
            </div>

            <!-- Time & Address -->
            <div class="customer mt-3 px-4 py-3" style="background-color: #FAFAFA;">
                <h3 class="text-center fw-bold">Time & Address</h3>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="date" class="form-label fw-bold fs-5">Date</label>
                        <input type="date" name="date" class="form-control" id="date" >
                        {{-- required --}}
                    </div>
                    <div class="mb-3 col-6">
                        <label for="time" class="form-label fw-bold fs-5">Time</label>
                        <input type="time" name="time" class="form-control" id="time" >
                        {{-- required --}}
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label fw-bold fs-5">Address</label>
                    <textarea name="address" class="form-control" id="address" style="height: 150px;"  placeholder="Alam Sutera, Ruko WoodLake Blok 5, ..."></textarea>
                    {{-- required --}}
                </div>

                <div class="mb-3">
                    <label for="note" class="form-label fw-bold fs-5">Note <i class="text-muted fs-6">(Optional)</i></label>
                    <textarea name="note" class="form-control" id="note" style="height: 150px;" placeholder="Roadworks are underway..."></textarea>
                </div>
            </div>
        </div>

        <!-- Total & Submit -->
        <div class="row">
            <h4>Total Bill:</h4>
            <h4 class="bill">Rp <span class="fw-bold fs-1" id="totalPrice">-</span></h4>
        </div>
        <input type="hidden" name="total_price" id="total_price">

        <button type="submit" class="btn btn-success fw-bold fs-3 py-1">Submit</button>
    </div>
</form>

</div>

@include('partials.customer.footer')


<script>
    document.querySelectorAll('.location-option').forEach(item => {
        item.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedLocation = this.textContent;
        document.getElementById('locationText').textContent = selectedLocation;
        });
    });

    document.querySelectorAll('.pet-option').forEach(item => {
        item.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedPet = this.textContent;
        document.getElementById('petTypeBtn').textContent = selectedPet;
        });
    });

    function formatRupiah(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    const checkboxes = document.querySelectorAll('.service-checkbox');
    const totalDisplay = document.querySelector('.bill span');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            let total = 0;

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total += parseInt(cb.dataset.price);
                }
            });

            totalDisplay.textContent = formatRupiah(total);
            document.getElementById('total_price').value = total;
        });
    });
</script>



@include('partials.customer.framedown')