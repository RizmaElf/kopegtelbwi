<section class="content-header">
	<h1>
		Items
		<small>Data Barang</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Items</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<?php $this->view('messages') ?>

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Product Items</h3>
		<div class="pull-right">
			<a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
				<!--<i class="fa fa-plus"></i>-->  Create Product Item
			</a>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">

		<table id="table1" class="table table-bordered table-striped">
		<thead>
		<tr>

			<th>#</th>
			<th>Barcode</th>
			<th>Name</th>
			<th>Category</th>
			<th>Unit</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td style="width:5%;"><?=$no++?></td>
					<td><?=$data->barcode?></td>
					<td><?=$data->name?></td>
					<td><?=$data->category_name?></td>
					<td><?=$data->unit_name?></td>
					<td><?=$data->price?></td>
					<td><?=$data->stock?></td>

					<td class="text-center" widht="160px">
						<a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i>  Update
						</a>
						<a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
							<i class="fa fa-trash"></i>  Delete
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
	<!-- /.box -->
</section>
<!-- /.content -->

<!-- <script> Script untuk membuat server-side
  $(document).ready(function () {
    $('#table1').DataTable( {
	"processing" : true,
	"serverSide" : true,
	"ajax" : {
		"url" : "<?=site_url('item/get_ajax')?>",
		"type" : "POST"
		}

	})
  })
</script> -->

