              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title" align="center">

                    <h2>DATA PETUGAS KESEHATAN</h2>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                      <thead>

                        <tr>

                          <th> No </th>

                          <th> Nama </th>

                          <th> Tanggal Lahir </th>

                          <th> Jenis Kelamin </th>

                          <th> Alamat </th>

                          <th> No HP </th>

                          <th> Nama Klinik</th>

                          <th> Izin Praktek </th>

                          <th> Status </th>

                          <th></th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php $no=1 ?>

                        <?php foreach($lihat->result_array() as $row) { ?>

                        <?php $row['id_petugas'] ?>

                          <tr>

                            <td><?php echo $no++ ?></td>

                            <td><?php echo $row['nama'] ?></td>

                            <?php $tanggal = $row['tgl_lahir'] ?>
			<td><?php echo date("d F Y", strtotime($tanggal)) ?></td>

			<?php if($row['jenis_kelamin'] == 'L') { ?>

                            <td ><?php echo "Laki-Laki" ?></td>
			<?php } else { ?>
			<td ><?php echo "Perempuan" ?></td>
			<?php } ?>

                            <td ><?php echo $row['alamat'] ?></td>

                            <td ><?php echo $row['no_hp'] ?></td>

                            <td ><?php echo $row['nama_klinik'] ?></td>

                            <td><?php echo $row['izin_praktek'] ?></td>

                            <td><?php if($row['status'] == 'belum'){ ?>

                              <span class="label label-sm label-warning">

                                  <?php echo $row['status'] ?>

                                </span>

                            <?php } else if($row['status'] == 'sudah'){?>

                              <span class="label label-sm label-success">

                                  <?php echo $row['status'] ?>

                                </span>

                            <?php } else if($row['status'] == 'tunggu'){?>

                              <span class="label label-sm label-primary">

                                  <?php echo $row['status'] ?>

                                </span>

			<?php } ?>

                            </td>

                            <td>

                              <div class="">

                                <?php if($row['status'] == 'sudah' || $row['status'] == 'belum') { ?>

                                  <button class="btn btn-warning" disabled="true"><i class="fa fa-fw fa-pencil"></i> Validasi </button>

                                <?php } else { ?>

                                <a class="blue" href="<?php echo base_url('index.php/Admin/update_petugas/' .$row['id_petugas']) ?>">

                                  <button class="btn btn-warning"><i class="fa fa-fw fa-pencil"></i> Validasi </button>

                                </a>

                                <?php } ?>

                                <a class="red" href="<?php echo base_url('index.php/Admin/detail_petugas/' .$row['id_petugas']) ?>">

                                  <button class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i> Hapus </button>

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







