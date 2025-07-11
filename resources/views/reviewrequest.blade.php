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
{{-- @php dd($bookingDetail->id); @endphp --}}
{{-- <pre>
bookingDetail: {{ json_encode($bookingDetail) }}
bookingDetail->id: {{ $bookingDetail->id ?? 'NULL' }}
</pre> --}}
{{-- <p>Generated route: {{ route('pendingrequest.update', ['id' => $bookingDetail->id]) }}</p> --}}

                <div class="booking d-flex justify-content-center" style="margin-bottom: 150px">
                <form method="POST" action="{{ route('pendingrequest.update', ['id'=>$bookingDetail->id]) }}" style=" width: 90%; background-color: white; padding: 50px; box-shadow: 2px 2px 13px rgba(168,168,168,0.75);">
                    @csrf
                    @method('PUT')

                    <h1 class="text-center mb-5 fw-bold">BOOKING FOR SERVICE DETAIL</h1>
                    <div class="row">

                        <!-- LEFT SIDE -->
                        <div class="col-6 mb-5">
                            <!-- Customer Data -->
                            <div class="customer px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Customer Data</h3>

                                <div class="mb-3">
                                    <h6>Name: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color: black">{{ old('name', $bookingDetail->name??'') }}</span>
                                    </div>
                                    <input type="hidden" name="name" class="form-control" id="name" value="{{ old('name', $bookingDetail->name??'') }}" >
                                    {{-- required --}}
                                </div>

                                <div class="mb-3">
                                    <h6>WhatsApp: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color:black;">{{ old('wa_number', $bookingDetail->wa_number??'') }}</span>                                    
                                    </div>
                                    <input type="hidden" name="wa_number" class="form-control" id="wa_number" value="{{ old('wa_number', $bookingDetail->wa_number??'') }}" >
                                    {{-- required --}}
                                </div>

                                <div class="mb-3">
                                    <h6>Email: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color:black;">{{ old('email', $bookingDetail->email??'') }}</span>
                                    </div>
                                    <input type="hidden" name="email" class="form-control" id="email" value="{{ old('email', $bookingDetail->email??'') }}">
                                </div>

                                <!-- Location Dropdown -->
                                <div class="mb-3">
                                    <h6>Branch: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                    </div>
                                    <span class="font-weight-bold h5" style="color: black">{{ old('branch', $bookingDetail->branch??'') }}</span>
                                    <input name="branch" type="hidden" value="{{ old('branch', $bookingDetail->branch??'') }}" id="branch" class="form-select" >
                                    </input>
                                </div>
                            </div>

                            <!-- Pet Data -->
                            <div class="pet mt-3 px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Pet Data</h3>
                                <div class="mb-3">
                                    <h6>Pet Type: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color:black">{{ old('pet_type', $bookingDetail->pet_type??'') }}</span>
                                    </div>
                                    <input name="pet_type" type="hidden" id="pet_type" class="form-select" value="{{ old('pet_type', $bookingDetail->pet_type??'') }}">
                                    </input>
                                </div>

                                <div class="mb-3">
                                    <h6>Race: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color:black">{{ old('race', $bookingDetail->race??'') }}</span>
                                    </div>
                                    <input type="hidden" name="race" class="form-control" id="race" value="{{ old('race', $bookingDetail->race??'') }}">
                                </div>

                                <div class="mb-3">
                                    <h6>Pet Name: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="font-weight-bold h5" style="color:black">{{ old('pet_name', $bookingDetail->pet_name??'') }}</span>
                                    </div>
                                    <input type="hidden" name="pet_name" class="form-control" id="pet_name" value="{{ old('pet_name', $bookingDetail->pet_name??'') }}">
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="col-6 mb-5">
                            <!-- Type Of Service -->
                            <div class="customer px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Type Of Service</h3>
                                <h6>Main Service: </h6>
                                @php
                                    $servicesRaw = old('services') ?? $bookingDetail->services ?? '[]';
                                    $services = is_string($servicesRaw) ? json_decode($servicesRaw, true) : $servicesRaw;
                                @endphp

                                @foreach ($services as $service)
                                    <span class="fonct-weight-bold h6 py-1 px-3" style="border-radius: 10px; color:white; background-color: #ff49f9">
                                        {{ $service }}
                                    </span>
                                @endforeach

                                @foreach ($services as $service)
                                    <input type="hidden" name="services[]" class="form-control" value="{{ $service }}">
                                @endforeach



                                <!-- Additional Request -->
                                <div class="mb-3">
                                    <h6 class="mt-3">Additional Request: </h6>
                                    <div class="py-2 px-2" style="background-color: white">
                                        <span class="h5 font-weight-bold" style="color:black;">{{ old('additional_request', $bookingDetail->additional_request??'') }}</span>
                                    </div>
                                    <textarea name="additional_request" class="form-control d-none" id="additional_request" style="height: 150px;" placeholder="Don't spray perfume">{{ old('additional_request', $bookingDetail->additional_request??'') }}</textarea>
                                </div>
                            </div>

                            <!-- Time & Address -->
                            <div class="customer mt-3 px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Time & Address</h3>

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <h6 for="date" class="form-label fw-bold fs-5">Date</h6>
                                        <span class="h5 font-weight-bold py-1 px-3" style="color:white; background-color: #53bdff">{{ \Carbon\Carbon::parse(old('date', $bookingDetail->date ?? ''))->format('d M Y') }}</span>
                                        <input type="hidden" name="date" value="{{ old('date', $bookingDetail->date??'') }}" class="form-control" id="date" >
                                        {{-- required --}}
                                    </div>
                                    <div class="mb-3 col-6">
                                        <h6 for="time" class="form-label fw-bold fs-5">Time</h6>
                                        <span class="h5 font-weight-bold py-1 px-3" style="color:white; background-color: #53bdff">{{ \Carbon\Carbon::parse(old('time', $bookingDetail->time ?? ''))->format('H:i') }}</span>
                                        <input type="hidden" name="time" value="{{ old('time', $bookingDetail->time??'') }}" class="form-control" id="time" >
                                        {{-- required --}}
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="mt-3">Address: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="h5 font-weight-bold" style="color:rgb(0, 0, 0);">{{ old('address', $bookingDetail->address??'') }}</span>
                                    </div>
                                    <textarea name="address" class="form-control d-none" id="address" style="height: 150px;" placeholder="Don't spray perfume">{{ old('address', $bookingDetail->address??'') }}"</textarea>
                                </div>

                                 <div class="mb-3">
                                    <h6 class="mt-3">Note: </h6>
                                    <div class="py-2 px-2" style="background-color: #ffffff">
                                        <span class="h5 font-weight-bold" style="color:rgb(0, 0, 0);">{{ old('note', $bookingDetail->note??'') }}</span>
                                    </div>
                                    <textarea name="note" class="form-control d-none" id="note" style="height: 150px;" placeholder="Don't spray perfume">{{ old('note', $bookingDetail->note??'') }}"</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Total & Submit -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Total Bill:</h4>
                                <h2 class="bill font-weight-bold">Rp <span class="fw-bold fs-1" id="totalPrice">{{ old('total_price', $bookingDetail->total_price??'') }}</span></h2>
                                <input type="hidden" value="{{ old('total_price', $bookingDetail->total_price??'') }}" name="total_price" id="total_price">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="../"><button type="" name="" style="font-size:30px; width: 100%;" class="btn btn-primary font-weight-bold py-1"><i class="fas fa-arrow-left"></i>&nbsp;Back</button></a>
                        </div>
                        <div class="col-4">
                            <button type="submit" name="action" value="reject" style="font-size:30px; width: 100%;" class="btn btn-danger font-weight-bold py-1"><i class="fas fa-times"></i>&nbsp;Reject</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" name="action" value="accept" style="font-size:30px; width: 100%;" class="btn btn-success font-weight-bold py-1"><i class="fas fa-check"></i>&nbsp;Accept</button>
                        </div>

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