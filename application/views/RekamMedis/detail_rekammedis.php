<header class="panel-heading"><center><h1> HAPUS REKAM MEDIS PASIEN </h1></center></header>
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
						<?php $row['id_periksa'] ?>
						<tr>
							<th> Nama Pasien </th>
							<td> : </td>
							<td><?php echo $row['pasien'] ?></td>
						</tr>
						<tr>
							<th> Tanggal </th>
							<td> : </td>
							<td><?php echo $row['tanggal'] ?></td>
						</tr>
						<tr>
							<th> Keluhan </th>
							<td> : </td>
							<td><?php echo $row['keluhan'] ?></td>
						</tr>
						<tr>
							<th> Riwayat Penyakit </th>
							<td> : </td>
							<td><?php echo $row['riwayat_penyakit'] ?></td>
						</tr>
						<tr>
							<th> Diagnosa </th>
							<td> : </td>
							<td><?php echo $row['diagnosa'] ?></td>
						</tr>
						<tr>
							<th> Tindakan Medis </th>
							<td> : </td>
							<td><?php echo $row['tindakan_medis'] ?></td>
						</tr>
						<tr>
							<th> Obat </th>
							<td> : </td>
							<td><?php echo $row['obat'] ?></td>
						</tr>
						<tr>
			                <th> Nama Petugas </th>
			                <td> : </td>
			                <td><?php echo $row['nama'] ?></td>
		              </tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div align="center">
					<?php
					echo anchor('Admin/hapus_rekammedis/ya/'.$row['id_periksa'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');
					echo "  ".anchor('Admin/lihat_rekammedis','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');
					?>
				</div>
			</div>
		</div>
		</section>
		</div>
		</div>
		</div>
