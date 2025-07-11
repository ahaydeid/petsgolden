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
                <form method="POST" enctype="multipart/form-data" action="{{ route('testimonials.update', ['id' => $testimonialsDetail->id]) }}" style=" width: 90%; margin-bottom: 100px; background-color: white; padding: 50px; box-shadow: 2px 2px 13px rgba(168,168,168,0.75);">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <h1 class="text-center mb-5 fw-bold">EDIT CUSTOMER TESTIMONIALS</h1>
                        <!-- LEFT SIDE -->
                        {{-- <div class="col mb-5"> --}}
                            <!-- Customer Data -->
                            <div class="customer col-12 px-4 py-3" style="background-color: #FAFAFA;">
                                <h3 class="text-center fw-bold">Customer Data</h3>
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold fs-5">Name</label>
                                    <input type="text" value="{{ old('name', $testimonialsDetail->name??'') }}" name="name" class="form-control" id="name" placeholder="" required>
                                    {{-- required --}}
                                </div>

                                 <!-- Testimonials Description-->
                                <div class="mb-3">
                                    <label for="testimonial" class="form-label fw-bold fs-5">Testimonials Description</label>
                                    <textarea name="testimonial" class="form-control" id="testimonial" style="height: 150px;" placeholder="" required>{{ old('testimonial', $testimonialsDetail->testimonial??'') }}</textarea>
                                </div>


                                <div class="mb-3">
                                <label for="foto" class="form-label fw-bold fs-5">Photo</label>
                                <img style="margin: 5px; width: 100px; border-radius: 10px;" src="{{ asset('storage/' . (old('foto', $testimonialsDetail->foto ?? $item->foto))) }}" style="width: 100px" alt="Customer Photo">
                                <input class="form-control" name="foto" type="file" id="foto">
                                </div>
                            </div>
                        {{-- </div> --}}
                        <div class="row">
                            <div class="col-6">
                            <a href="../">                        
                            <button
                                class="btn btn-primary fw-bold fs-3 py-3 px-5">
                                Back
                            </button>
                            </a>
                            </div>
                            <div class="col-6">
                            <button
                                type="submit"
                                class="btn btn-success fw-bold fs-3 py-3 px-5"
                                onclick="return confirm('Update This Data?')">
                                Update
                            </button>

                            </div>
                        </div>
                    </div>
                </form>

                </div>
                <!-- /.container-fluid -->

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