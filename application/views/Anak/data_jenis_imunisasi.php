              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title" align="center">

                    <h2>DATA JENIS IMUNISASI</h2>

                    <div class="clearfix"></div>

                  </div>

                  <a href="<?php echo base_url('index.php/Admin/tambahJenisImunisasi') ?>">

                    <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i>Tambah Imunisasi</button>

                  </a>

                  <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                      <thead>

                        <tr>

                          <th> No </th>

                          <th> Kode Jenis </th>

                          <th> Nama Imunisasi </th>

                          <th> Umur </th>

                          <th></th>

                        </tr>

                      </thead>

                      <tbody>

                        <tr>

                          <?php $no=1 ?>

                          <?php foreach($lihat->result_array() as $row) { ?>

                          <td><?php echo $no++; ?></td> 

                          <td><?php echo $row['id_jenis'] ?></td>

                          <td><?php echo $row['nama_imunisasi'] ?></td>

                          <td><?php echo $row['umur'] ?></td>

                          <td>

                            <div class="">

                              <a class="blue" href="<?php echo base_url('index.php/Admin/updateJenisImunisasi/' .$row['id_jenis']) ?>">

                                  <button class="btn btn-warning"><i class="ace-icon fa fa-pencil bigger-130"></i> Edit </button>

                              </a>

                              <a class="red" href="<?php echo base_url('index.php/Admin/detail_jenis/' .$row['id_jenis']) ?>">

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