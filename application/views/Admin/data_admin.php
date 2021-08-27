<header class="panel-heading"><center><h1>PROFIL ADMIN</h1></center></header>

<div class="row">

<div class="col-sm-6 col-sm-offset-3">

    <div class="position-relative">

      <section class="panel">

        <div class="panel-body">

          <div class="form">

            <table class="table table-striped table-bordered">

              <tbody >

                <?php foreach($tampil->result_array() as $row) { ?>

                <?php $row['id_admin'] ?>

                </tr>

                <tr>

                  <th> Nama Lengkap</th>

                  <td> : </td>

                  <td><?php echo $row['nama_admin'] ?></td>

                </tr>

                <tr>

                 <th> Jenis Kelamin </th>

                 <td> : </td>

                 <?php if($row['jenis_kelamin'] == 'L') { ?>

                            <td ><?php echo "Laki-Laki" ?></td>
			<?php } else { ?>
			<td ><?php echo "Perempuan" ?></td>
			<?php } ?>

               </tr>

               <tr>

                <th> Provinsi </th>

                <td> : </td>

                <td><?php echo $row['nama_provinsi'] ?></td>

              </tr>

              <tr>

                <th> Kabupaten </th>

                <td> : </td>

                <td><?php echo $row['nama_kabupaten'] ?></td>

              </tr>

              <tr>

                <th> Kecamatan </th>

                <td> : </td>

                <td><?php echo $row['nama_kecamatan'] ?></td>

              </tr>

              <tr>

                <th> Kelurahan </th>

                <td> : </td>

                <td><?php echo $row['nama_kelurahan'] ?></td>

              </tr>

               <tr>

                <th> Alamat </th>

                <td> : </td>

                <td><?php echo $row['alamat'] ?></td>

              </tr>

              <tr>

                <th> Nomor Handphone </th>

                <td> : </td>

                <td><?php echo $row['no_hp'] ?></td>

              </tr>

              <tr>

                <th> Foto </th>

                <td> : </td>

                <td><img src="<?php echo base_url('images/thumbnails/Admin/'.$row['foto']);?>"></td>

              </tr>

              <?php } ?>

            </tbody>

          </table>

        </div>

        <div align="center">

          <a href="<?php echo base_url('index.php/Admin/update_admin/' .$row['id_admin']) ?>">

            <button class="btn btn-warning"> Update Profil <i class="fa fa-edit"></i></button></a>

            <a href="<?php echo base_url('index.php/Admin/update_foto/' .$row['id_admin']) ?>">

            <button class="btn btn-warning"> Update Foto <i class="fa fa-image"></i></button></a>

          </div>

        </div>

      </div>

    </section>

  </div>

</div>

</div>