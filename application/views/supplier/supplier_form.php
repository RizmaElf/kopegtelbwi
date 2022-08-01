<section class="content-header">
	<h1>
		Suppliers
		<small>Supplier</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Suppliers</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
			<div class="pull-right">
				<a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i>  Back
				</a>
			</div>
		</div>

	<div class="box-body">
		<div class="row">
			<?php //echo validation_errors(); ?>
			<div class="col-md-4 col-md-offset-4">
				<form action="<?=site_url('supplier/process')?>" method="post">
					<div class="form-group">
						<label>Supplier Name *</label>
						<input type="hidden" name="id" value="<?=$row->supplier_id?>">
						<input type="text" name="supplier_name" value="<?=$row->name?>" class="form-control" placeholder="Enter Supplier Name" required>
					</div>

					<div class="form-group">
						<label>Phone *</label>
						<input type="number" name="phone" value="<?=$row->phone?>" class="form-control" placeholder="Enter Phone Number" required>
					</div>

					<div class="form-group">
						<label>Address *</label>
						<textarea name="addr" class="form-control" required><?=$row->address?></textarea>
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea name="desc" class="form-control"><?=$row->description?></textarea>
					</div>

					<div class="box-footer">
						<button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
						<button type="reset" class="btn btn-flat">Reset</button>
					</div>

				</form>
			</div>
		</div>
		<!-- /.box-body -->
	</div>
<!-- /.box -->
</section>
<!-- /.content -->
