<section class="content-header">
	<h1>
		Kembali Panjar
		<small>Kembali Panjar</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Kembali Panjar</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Kembali Panjar</h3>
		<div class="pull-right">
			<a href="<?=site_url('kembali_panjar/add')?>" class="btn btn-primary btn-flat">
				<i class="fa fa-plus"></i>  Create
			</a>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="table1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th>Unit Kerja</th>
			<th>Date</th>			
			<th>No. Akun</th>
			<th>Uraian</th>
			<th>Sub. Jumlah</th>
			<th>Jumlah</th>
			<th>Keterangan</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$data->unit_kerja?></td>
					<td><?=$data->date?></td>
					<td><?=$data->no_akun?></td>
					<td><?=$data->uraian?></td>
					<td><?=$data->sub_jumlah?></td>
					<td><?=$data->jumlah?></td>
					<td><?=$data->keterangan?></td>
					<td class="text-center" widht="160px">
						<a href="<?=site_url('kembali_panjar/kpanjar/'.$data->kembalipanjar_id)?>" class="btn btn-default btn-xs">
							<i class="fa fa-eye"></i>
						</a>
						<a href="<?=site_url('kembali_panjar/edit/'.$data->kembalipanjar_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="<?=site_url('kembali_panjar/del/'.$data->kembalipanjar_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
							<i class="fa fa-trash"></i>
						</a>
					</td>
				</tr>
			<?php
				} ?>
		</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</section>
<!-- /.content -->
