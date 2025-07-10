<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>ADMIN - PETSGOLDEN</title>
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
                    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">SERVICES ON GOING</h1>
                    {{-- <p class="mb-4">Here is a list of bookings from customers who want to use the service, you can confirm with "Accept", or reject if the incoming data is invalid (e.g. spam) with "Reject". </p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="background-color: #30a9ff; color: white;">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Whatsapp</th>
                                            <th>Email</th>
                                            <th>Branch</th>
                                            <th>Pet Type</th>
                                            <th>Race</th>
                                            <th>Pet Name</th>
                                            <th>Services</th>
                                            <th>Additional Request</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Address</th>
                                            <th>Note</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                         @foreach ($booking as $item )                                          
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->wa_number }}</td>
                                            <td>{{ $item->email ?? '-' }}</td>
                                            <td>{{ $item->branch }}</td>
                                            <td>{{ $item->pet_type }}</td>
                                            <td>{{ $item->race ?? '-' }}</td>
                                            <td>{{ $item->pet_name ?? '-' }}</td>
                                            <td>
                                                @php
                                                    $services = is_array($item->services) ? $item->services : json_decode($item->services, true);
                                                @endphp

                                                {{ is_array($services) ? implode(', ', $services) : '-' }}
                                            </td>
                                            <td>{{ $item->additional_request ?? '-' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->time)->format('H:i') }}</td>
                                            {{-- <td>{{ $item->date }}</td
                                            <td>{{ $item->time }}</td> --}}
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->note ?? '-' }}</td>
                                            <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                            <td><button class="btn btn-warning">{{ $item->status }}</button></td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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