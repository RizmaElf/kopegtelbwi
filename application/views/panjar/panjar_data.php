<section class="content-header">
	<h1>
		Panjar
		<small>Panjar</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Panjar</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Panjar</h3>
		<div class="pull-right">
			<a href="<?=site_url('panjar/add')?>" class="btn btn-primary btn-flat">
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
			<th>Date</th>
			<th>Keterangan</th>
			<th>Jumlah</th>
			<th>Terbilang</th>
			<th>Bagian</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$data->date?></td>
					<td><?=$data->keterangan?></td>
					<td><?=$data->jumlah?></td>
					<td><?=$data->terbilang?></td>
					<td><?=$data->bagian?></td>
					<td class="text-center" widht="160px">
						<a href="<?=site_url('panjar/cetak/'.$data->panjar_id)?>"  class="btn btn-default btn-xs">
							<i class="fa fa-eye"></i>
						</a>
						<a href="<?=site_url('panjar/edit/'.$data->panjar_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="<?=site_url('panjar/del/'.$data->panjar_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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
</div>
</section>
<!-- /.content -->
