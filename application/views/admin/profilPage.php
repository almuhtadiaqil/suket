<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/bootsrap/4.5.2/css/bootsrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>

<body>


    <!--Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> Data Warga </h1>

        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-primary" href="<?= base_url('admin/tambah_warga') ?>">+ Tambah Warga</a>
            </div>


            <div class="col-md-1.5">
                <p> Tampilkan : </p>
            </div>

            <div class="col-md-2">
                <select class="custom-select">
                    <option value="1">RW 01</option>
                    <option value="2">RW 02</option>
                    <option value="3">RW 03</option>
                    <option value="4">RW 04</option>
                    <option value="5">RW 05</option>
                    <option value="6">RW 06</option>
                    <option value="7">RW 07</option>
                    <option value="8">RW 08</option>
                    <option value="9">RW 09</option>
                    <option value="10">RW 10</option>
                    <option value="11">RW 11</option>
                    <option value="12">RW 12</option>
                    <option value="13">RW 13</option>
                    <option value="14">RW 14</option>
                    <option value="15">RW 15</option>
                    <option value="16">RW 16</option>
                    <option value="17">RW 17</option>
                    <option value="18">RW 18</option>
                    <option value="19">RW 19</option>
                    <option value="20">RW 20</option>
                    <option value="21">RW 21</option>
                    <option value="22">RW 22</option>
                    <option value="23">RW 23</option>
                    <option value="24">RW 24</option>
                    <option value="25">RW 25</option>
                    <option value="26">RW 26</option>
                    <option value="27">RW 27</option>
                    <option value="28">RW 28</option>
                    <option value="29">RW 29</option>
                </select>
            </div>

            <div class="col-md-2">
                <select class="custom-select">
                    <option value="31">RT 01</option>
                    <option value="32">RT 02</option>
                    <option value="33">RT 03</option>
                    <option value="34">RT 04</option>
                    <option value="35">RT 05</option>
                    <option value="36">RT 06</option>
                    <option value="37">RT 07</option>
                    <option value="38">RT 08</option>
                    <option value="39">RT 09</option>
                    <option value="40">RT 10</option>
                    <option value="41">RT 11</option>
                    <option value="42">RT 12</option>
                    <option value="43">RT 13</option>
                    <option value="44">RT 14</option>
                </select>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-primary"> Tampil </button>
            </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: hidden;">
                    <table class="table  table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No.KK</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">RT</th>
                                <th scope="col">RW</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user as $user) : ?>
                                <tr>
                                    <th scope="col"><?= $i++; ?></th>
                                    <th scope="col"><?= $user['no_kk']; ?></th>
                                    <th scope="col"><?= $user['no_nik']; ?></th>
                                    <th scope="col"><?= $user['nama']; ?></th>
                                    <th scope="col"><?= $user['RT']; ?></th>
                                    <th scope="col"><?= $user['RW']; ?></th>
                                    <th scope="col">
                                        <a style="-moz-tab-size: 2;" class="btn btn-sm btn-primary text-white" href="<?php echo base_url('admin/detail_warga/' . $user['id']); ?>"> Detail </a>
                                        &emsp;
                                        <a style="-moz-tab-size: 2;" class="btn btn-sm btn-danger m-1 text-white " onclick="" class="btn btn-small" data-toggle="modal"data-target="#staticModal" data-popup="tooltip" data-placement="top" title="Hapus Data"> Hapus </a> <!-- fungsi hapus belum masuk controller -->
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Yakin Ingin Menghapus Dari Daftar ??
        </p>
      </div>
      <input type="hidden" name="action" id="act_value">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a type="button" class="btn btn-primary" href="<?php echo site_url('admin/hapus_warga/' . $user['id']); ?>">Ya, Hapus</a>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stachpath.bootsrapcdn.com/bootsrap/4.5.2/js/bootsrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('.mydatatable').DataTable();
    </script>



</body>

</html>