              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" align="center">
                    <h2>DATA ANAK</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama </th>
                          <th> Tanggal Lahir </th>
                          <th> Jam Lahir </th>
                          <th> Jenis Kelamin </th>
                          <th> Berat Badan (Kg)</th>
                          <th> Panjang Badan (Cm)</th>
                          <th> Lingkar Kepala (Cm)</th>
                          <th> Nama Ibu </th>
                          <th> Status Gizi </th>
                          <th> Status Imunisasi </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($lihat->result_array() as $row) { ?>
                        <tr>    
                          <td><?php echo $row['no_register'] ?></td>
                          <td><?php echo $row['nama_anak'] ?></td>
                          <td><?php echo $row['tanggal_lahir'] ?></td>
                          <td><?php echo $row['jam_lahir'] ?></td>
                          <td><?php echo $row['jenis_kelamin'] ?></td>
                          <td><?php echo $row['berat_badan'] ?></td>
                          <td><?php echo $row['panjang_badan'] ?></td>
                          <td><?php echo $row['lingkar_kepala'] ?></td>
                          <td><?php echo $row['nama_ibu'] ?></td>
                          <td><?php echo $row['status_gizi'] ?></td>
                          <td><?php echo $row['status_imunisasi'] ?></td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                              <a class="red" href="<?php echo base_url('index.php/Admin/detail_anak/' .$row['no_register']) ?>">
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



