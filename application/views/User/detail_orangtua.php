<header class="panel-heading"><center><h1> HAPUS USER </h1></center></header>

<div class="row">

<div class="col-sm-6 col-sm-offset-3">

    <div class="position-relative">

		<section class="panel">

        <header class="panel-heading"></header>

			<div class="panel-body">

				<div class="form">

					<table class="table table-striped table-bordered">

						<tbody>

						<?php foreach($query->result_array() as $row) { ?>

						<tr>

							<th> NO KTP </th>

							<td> : </td>

							<td><?php echo $row['no_ktp'] ?></td>

						</tr>

						<tr>

							<th> Nama </th>

							<td> : </td>

							<td><?php echo $row['nama'] ?></td>

						</tr>

						<tr>

							<th> Tanggal Lahir </th>

							<td> : </td>

							<?php $tanggal = $row['tgl_lahir'] ?>
			<td><?php echo date("d F Y", strtotime($tanggal)) ?></td>

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

							<th> Alamat </th>

							<td> : </td>

							<td><?php echo $row['alamat'] ?></td>

						</tr>

						<tr>

							<th> No HP </th>

							<td> : </td>

							<td><?php echo $row['no_hp'] ?></td>

						</tr>

						<?php } ?>

						</tbody>

					</table>

				</div>

				<div align="center">

					  <?php

						echo anchor('Admin/hapus_orangtua/ya/'.$row['no_ktp'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');

						echo "  ".anchor('Admin/lihat_orangtua','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');

					  ?>

				</div>

			</div>

		</div>

		</section>

		</div>

		</div>

		</div>

