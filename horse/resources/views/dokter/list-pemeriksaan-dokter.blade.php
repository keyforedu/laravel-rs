@extends('layouts.app')
@section('title', 'ListPasien')
@section('setAktifListPasien', 'active')

@section('customCSS')

    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h1-title-600 w-100 text-center" id="myExtraLargeModalLabel">Detail Pemeriksaan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pemeriksaan</th>
                                            <th>Jam Pemeriksaan</th>
                                            <th>ID Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jenis Pemeriksaan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>12-09-2025</td>
                                            <td>10.00</td>
                                            <td>ABC12345</td>
                                            <td>Perempuan</td>
                                            <td>MRI Scan</td>
                                            <td>Selesai</td>
                                            <td><i class="bi bi-pencil-square"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="biggest-font mt-5 mb-5">List Pasien</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Jam Pemeriksaan</th>
                                <th>ID Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td class="detail-link" data-toggle="modal" data-target="#myModal">Detail</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


@endsection

@section('customJS')

    <!-- Bootstrap core JavaScript-->
    <script src="/templating-assets/vendor/jquery/jquery.min.js"></script>
    <script src="/templating-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/templating-assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/templating-assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/templating-assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/templating-assets/js/demo/datatables-demo.js"></script>

@endsection
