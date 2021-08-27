              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title" align="center">

                    <h2>DATA REKAM MEDIS PASIEN</h2>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                      <thead>

                        <tr>

                          <th> No </th>

                          <th> Nama Pasien </th>

                          <th> Tanggal </th>

                          <th> Keluhan </th>

                          <th> Riwayat Penyakit </th>

                          <th> Diagnosa </th>

                          <th> Tindakan Medis </th>

                          <th> Obat </th>

                          <th> Nama Petugas </th>

                          <th></th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php $no=1 ?>

                        <?php foreach($lihat->result_array() as $row) { ?>

                        <?php $row['id_periksa'] ?>

                        <tr>

                          <td><?php echo $no++ ?></td> 

                          <td><?php echo $row['pasien'] ?></td>

                          <td><?php echo $row['tanggal'] ?></td>

                          <td><?php echo $row['keluhan'] ?></td>

                          <td ><?php echo $row['riwayat_penyakit'] ?></td>

                          <td><?php echo $row['diagnosa'] ?></td>

                          <td><?php echo $row['tindakan_medis'] ?></td>

                          <td><?php echo $row['obat'] ?></td>

                          <td><?php echo $row['nama'] ?></td>

                          <td>

                            <div class="">

                              <a class="red" href="<?php echo base_url('index.php/Admin/detail_rekammedis/' .$row['id_periksa']) ?>">

                                <button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>

                              </a>

                            </div>

                          </td>

                        </tr>

                        <?php } ?>

                      </tbody>

                    </table>

                  </div>

                </div>

              </div>







