<header class="panel-heading"><center><h1> HAPUS ANAK </h1></center></header>

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

						<?php $row['no_register'] ?>

						<tr>

							<th> Nama </th>

							<td> : </td>

							<td><?php echo $row['nama'] ?></td>

						</tr>

						<tr>

							<th> Tanggal Lahir </th>

							<td> : </td>

							<?php $tanggal = $row['tanggal_lahir'] ?>
			<td><?php echo date("d F Y", strtotime($tanggal)) ?></td>


						</tr>

						<tr>

							<th> Jam Lahir </th>

							<td> : </td>

							<td><?php echo $row['jam_lahir'] ?></td>

						</tr>

						<tr>

							<th> Jenis Kelamin </th>

							<td> : </td>

							<?php if($row['gender'] == 'L') { ?>

                            <td ><?php echo "Laki-Laki" ?></td>
			<?php } else { ?>
			<td ><?php echo "Perempuan" ?></td>
			<?php } ?>

						</tr>

						<tr>

							<th> Berat Badan </th>

							<td> : </td>

							<td><?php echo $row['berat_badan'] ?> Kg </td>

						</tr>

						<tr>

							<th> Panjang Badan </th>

							<td> : </td>

							<td><?php echo $row['panjang_badan'] ?> Cm </td>

						</tr>

						<tr>

							<th> Lingkar Kepala </th>

							<td> : </td>

							<td><?php echo $row['lingkar_kepala'] ?> Cm </td>

						</tr>

						<?php } ?>

						</tbody>

					</table>

				</div>

				<div align="center">

					  <?php

						echo anchor('Admin/hapus_anak/ya/'.$row['no_register'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');

						echo "  ".anchor('Admin/lihat_anak','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');

					  ?>

				</div>

			</div>

		</div>

		</section>

		</div>

		</div>

		</div>

