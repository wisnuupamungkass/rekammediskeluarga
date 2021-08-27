<header class="panel-heading"><center><h1>HAPUS PETUGAS</h1></center></header>
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
							<th> No KTP </th>
							<td> : </td>
							<td><?php echo $row['id_petugas']; ?></td>
						</tr>
						<tr>
							<th> Nama </th>
							<td> : </td>
							<td><?php echo $row['nama']; ?></td>
						</tr>
						<tr>
							<th> Tanggal Lahir </th>
							<td> : </td>
							<td><?php echo $row['tgl_lahir']; ?></td>
						</tr>
						<tr>
							<th> Jenis Kelamin </th>
							<td> : </td>
							<td><?php echo $row['jenis_kelamin']; ?></td>
						</tr>
						<tr>
							<th> Alamat </th>
							<td> : </td>
							<td><?php echo $row['alamat']; ?></td>
						</tr>
						<tr>
							<th> No HP </th>
							<td> : </td>
							<td><?php echo $row['no_hp']; ?></td>
						</tr>
						<tr>
							<th> Nama Klinik </th>
							<td> : </td>
							<td><?php echo $row['nama_klinik']; ?></td>
						</tr>
						<tr>
							<th> Izin Praktek </th>
							<td> : </td>
							<td><?php echo $row['izin_praktek']; ?></td>
						</tr>
		              	<tr>
							<th> Status </th>
							<td> : </td>
							<td><?php echo $row['status']; ?></td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div align="center">
					  <?php
						echo anchor('Admin/hapus_petugas/ya/'.$row['id_petugas'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');
						echo "  ".anchor('Admin/lihat_petugas','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');
					  ?>
				</div>
			</div>
		</div>
		</section>
		</div>
		</div>
		</div>