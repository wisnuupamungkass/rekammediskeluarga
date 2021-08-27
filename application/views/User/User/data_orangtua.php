              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" align="center">
                    <h2>DATA USER</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th> NIK </th>
                          <th> Nama </th>
                          <th> Tanggal Lahir </th>
                          <th> Jenis Kelamin </th>
                          <th> Alamat </th>
                          <th> No HP </th>
                          <th> Foto </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($lihat->result_array() as $row) { ?>
                        <tr>
                          <td><?php echo $row['no_ktp'] ?></td>
                          <td><?php echo $row['nama'] ?></td>
                          <td><?php echo $row['tgl_lahir'] ?></td>
                          <td ><?php echo $row['jenis_kelamin'] ?></td>
                          <td><?php echo $row['alamat'] ?></td>
                          <td><?php echo $row['no_hp'] ?></td>
                          <td><img src="<?php echo base_url('images/thumbnails/Orangtua/'.$row['foto']);?>"></td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                              <a class="red" href="<?php echo base_url('index.php/Admin/detail_orangtua/' .$row['no_ktp']) ?>">
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



