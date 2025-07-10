<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Admin - PETSGOLDEN</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/golden-title.ico') }}"/>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            vertical-align: middle;
        }
        .table-responsive {
        overflow-x: auto;
    }

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.admin.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">REVIEW REQUEST</h1>
                    {{-- <p class="mb-4">Here is a list of bookings from customers who want to use the service, you can confirm with "Accept", or reject if the incoming data is invalid (e.g. spam) with "Reject". </p> --}}

                <div class="booking d-flex justify-content-center" style="margin-bottom: 150px">
                <form method="PUT" action="{{ route('pendingrequest.update', ['id'=>$bookingDetail->id]) }}" style=" width: 90%; background-color: white; padding: 50px; box-shadow: 2px 2px 13px rgba(168,168,168,0.75);">
                    @csrf
                    @method('PUT')

                    <h1 class="text-center mb-5 fw-bold">BOOKING FOR SERVICE</h1>
                    <div class="row">

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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="/loginadmin">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>



</body>

</html>