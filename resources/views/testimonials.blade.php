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
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

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
                <form method="POST" enctype="multipart/form-data" action="{{ route('testimonials.store') }}" style=" width: 90%; margin-bottom: 100px; background-color: white; padding: 50px; box-shadow: 2px 2px 13px rgba(168,168,168,0.75);">
                    @csrf
                    <div class="row">
                        <h1 class="text-center mb-5 fw-bold">CUSTOMER TESTIMONIALS</h1>
                        <!-- LEFT SIDE -->
                        {{-- <div class="col mb-5"> --}}
                            <!-- Customer Data -->
                            <div class="customer col-12 px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Customer Data</h3>
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold fs-5">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                                    {{-- required --}}
                                </div>

                                 <!-- Testimonials Description-->
                                <div class="mb-3">
                                    <label for="testimonial" class="form-label fw-bold fs-5">Testimonials Description</label>
                                    <textarea name="testimonial" class="form-control" id="testimonial" style="height: 150px;" placeholder="" required></textarea>
                                </div>


                                <div class="mb-3">
                                <label for="foto" class="form-label fw-bold fs-5">Foto</label>
                                <input class="form-control" name="foto" type="file" id="foto">
                                </div>
                            </div>
                        {{-- </div> --}}
                        <button type="submit" class="btn btn-success fw-bold fs-3 py-3 px-5 fw-bold">Submit</button>
                    </div>
                </form>

                </div>
                <!-- /.container-fluid -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="background-color: #30a9ff; color: white;">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Testimonials Description</th>
                                            <th>Foto</th>
                                            <th>Action</th>
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
                                        @foreach ($testimonials as $item )                                          
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <p style="
                                                max-height: 90px;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                display: -webkit-box;
                                                -webkit-line-clamp: 3;
                                                -webkit-box-orient: vertical;">
                                                    {{ $item->testimonial }}
                                                </p>
                                            </td>
                                            <td>{{ $item->foto }}</td>
                                            <td>
                                                <a href="{{ route('testimonials.edit',['id'=>$item->id]) }}"><button class="btn btn-warning"><i class="fas fa-edit"></i>&nbsp;Edit</button></a>
                                                <form action="{{ route('testimonials.delete',['id'=>$item->id]) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')

                                                <button type="submit" class="btn btn-danger fw-bold" onclick="return confirm('Are You Sure Want To Delete This Data?')">
                                                    <i class="fas fa-trash"></i>Submit
                                                </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ date('Y') }} PetsGolden. All rights reserved.</span>
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
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
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
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>


    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
</body>

</html>