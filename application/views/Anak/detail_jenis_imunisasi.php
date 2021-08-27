<header class="panel-heading"><center><h1> HAPUS JENIS IMUNISASI </h1></center></header>
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
							<th> ID Jenis Imunisasi </th>
							<td> : </td>
							<td><?php echo $row['id_jenis'] ?></td>
						</tr>
						<tr>
							<th> Nama Imunisasi </th>
							<td> : </td>
							<td><?php echo $row['nama_imunisasi'] ?></td>
						</tr>
						<tr>
							<th> Umur </th>
							<td> : </td>
							<td><?php echo $row['umur'] ?></td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div align="center">
					  <?php
						echo anchor('Admin/hapus_jenis/ya/'.$row['id_jenis'],'<button class="btn btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus </button>');
						echo "  ".anchor('Admin/lihat_jenis','<button class="btn btn-primary"><i class="ace-icon fa fa-undo bigger-130"></i> Batal </button>');
					  ?>
				</div>
			</div>
		</div>
		</section>
		</div>
		</div>
		</div>
