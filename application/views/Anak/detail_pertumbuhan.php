<header class="panel-heading"><center><h1> HAPUS PERTUMBUHAN ANAK</h1></center></header>
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
						<?php $row['id_pertumbuhan'] ?>
						<tr>
							<th> Tanggal </th>
							<td> : </td>
							<td><?php echo $row['tanggal'] ?></td>
						</tr>
						<tr>
							<th> Lingkar Kepala </th>
							<td> : </td>
							<td><?php echo $row['lingkar_kepala'] ?></td>
						</tr>
						<tr>
							<th> Berat Badan </th>
							<td> : </td>
							<td><?php echo $row['berat_badan'] ?></td>
						</tr>
						<tr>
							<th> Tinggi Badan </th>
							<td> : </td>
							<td><?php echo $row['tinggi_badan'] ?></td>
						</tr>
						<tr>
							<th> Nama Anak </th>
							<td> : </td>
							<td><?php echo $row['nama_anak'] ?></td>
						</tr>
						<tr>
							<th> Nama Petugas </th>
							<td> : </td>
							<td><?php echo $row['nama_petugas'] ?></td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div align="center">
					  <?php
						echo anchor('Admin/hapus_pertumbuhan/ya/'.$row['id_pertumbuhan'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');
						echo "  ".anchor('Admin/lihat_pertumbuhan','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');
					  ?>
				</div>
			</div>
		</div>
		</section>
		</div>
		</div>
		</div>
