              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" align="center">
                    <h2>DATA PERTUMBUHAN ANAK</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Tanggal </th>
                          <th> Lingkar Kepala </th>
                          <th> Berat Badan </th>
                          <th> Tinggi Badan </th>
                          <th> Nama Anak </th>
                          <th> Nama Petugas </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                        <?php foreach($lihat->result_array() as $row) { ?>
                        <?php $row['id_pertumbuhan'] ?>
                        <tr>
                          <td> <?php echo $no++ ?></td>
                          <td><?php echo $row['tanggal'] ?></td>
                          <td><?php echo $row['lingkar_kepala'] ?></td>
                          <td ><?php echo $row['berat_badan'] ?></td>
                          <td><?php echo $row['tinggi_badan'] ?></td>
                          <td><?php echo $row['nama_anak'] ?></td>
                          <td><?php echo $row['nama_petugas'] ?></td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                              <a class="red" href="<?php echo base_url('index.php/Admin/detail_pertumbuhan/' .$row['id_pertumbuhan']) ?>">
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