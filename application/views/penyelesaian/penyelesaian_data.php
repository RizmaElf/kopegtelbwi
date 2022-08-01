<section class="content-header">
	<h1>
		penyelesaian
		<small>penyelesaian</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">penyelesaian</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data penyelesaian</h3>
		<div class="pull-right">
			<a href="<?=site_url('penyelesaian/add')?>" class="btn btn-primary btn-flat">
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
			<th>Periode</th>
			<th>Unit Kerja</th>
			<th>Document</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$data->periode?></td>
					<td><?=$data->unit_kerja?></td>
					<td><?=$data->file?></td>
					<td class="text-center" widht="160px">
						<a href="<?=base_url('uploads/docpenyelesaian/'.$data->file)?>"  class="btn btn-default btn-xs">
						<i class="fa fa-eye"></i>
						</a>
						<a href="<?=site_url('penyelesaian/edit/'.$data->penyelesaian_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="<?=site_url('penyelesaian/del/'.$data->penyelesaian_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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
