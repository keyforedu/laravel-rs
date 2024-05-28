@section('title', 'Manage Karyawan')
@section('setAktifListKaryawan', 'active')

@section('ListKaryawan')
    <!-- Custom styles for this template -->
    <link href="/list-pemeriksaan-pasien-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title">Karyawan</h1>

        <div class="container" style="margin-left:7.8rem; margin-top: 1.5rem; margin-bottom: 2.5rem">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <button type="button" class="btn btn-primary mx-2 d-flex align-items-center justify-content-center"
                        style="width: 120px;" data-toggle="modal" data-target="#myModal">
                        <i class="bi bi-plus-lg me-2"></i> Tambah
                    </button>
                    <button type="button" class="btn btn-danger mx-2 d-flex align-items-center justify-content-center"
                        style="width: 120px;">
                        <i class="bi bi-trash3-fill me-2"></i> Hapus
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="modal-title w-100 text-center" id="myExtraLargeModalLabel">Tambah Karyawan</h1>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaKaryawan" class="col-sm-4 col-form-label">Nama Karyawan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaKaryawan"
                                            placeholder="Masukan Nama Karyawan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpRumah" class="col-sm-4 col-form-label">Telp Rumah:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpRumah"
                                            placeholder="Masukan Telp Rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTempatLahir"
                                            placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpHP" class="col-sm-4 col-form-label">Telp HP:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTelpHP"
                                            placeholder="Masukan Telp HP">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglLahir" class="col-sm-4 col-form-label">Tgl Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglLahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputEmail" class="col-sm-4 col-form-label">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail"
                                            placeholder="Masukan Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoIdentitas" class="col-sm-4 col-form-label">No Identitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoIdentitas"
                                            placeholder="No Identitas">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKategoriStaff" class="col-sm-4 col-form-label">Kategori Staff:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputKategoriStaff">
                                            <option>Dokter 1</option>
                                            <option>Dokter 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-start">
                                    <label for="inputAlamatDomisili" class="col-sm-4 col-form-label">Alamat
                                        Domisili:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputAlamatDomisili" placeholder="Masukan Alamat Domisili" style="height: 10rem"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKecamatan">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKelurahan" class="col-sm-4 col-form-label">Kelurahan:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKelurahan">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKodePos" class="col-sm-4 col-form-label">Kode Pos:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKodePos">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Karyawan</th>
                                <th>Nama</th>
                                <th>Telepon Rumah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Bootstrap core JavaScript-->
    <script src="/list-pemeriksaan-pasien-assets/vendor/jquery/jquery.min.js"></script>
    <script src="/list-pemeriksaan-pasien-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/list-pemeriksaan-pasien-assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/list-pemeriksaan-pasien-assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/list-pemeriksaan-pasien-assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/list-pemeriksaan-pasien-assets/js/demo/datatables-demo.js"></script>
@endsection
