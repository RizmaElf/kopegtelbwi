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
			<h3 class="box-title"><?=ucfirst($page)?> Panjar</h3>
			<div class="pull-right">
				<a href="<?=site_url('panjar')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i>  Back
				</a>
			</div>
		</div>

	<div class="box-body">
		<div class="row">
			<?php //echo validation_errors(); ?>
			<div class="col-md-4 col-md-offset-4">
				<form action="<?=site_url('panjar/process')?>" method="post">
					<div class="form-group">
						<label>Date *</label>
						<input type="hidden" name="id" value="<?=$row->panjar_id?>">
						<input type="text" name="date" value="<?=$row->date?>" class="form-control" placeholder="Enter panjar Name" required>
					</div>

					<div class="form-group">
						<label>Keterangan *</label>
						<input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control" placeholder="Enter Phone Number" required>
					</div>

					<div class="form-group">
						<label>Jumlah *</label>
						<input name="jumlah" class="form-control" value="<?=$row->jumlah?>" required>
					</div>

					<div class="form-group">
						<label>Terbilang *</label>
						<input name="terbilang" class="form-control" value="<?=$row->terbilang?>" required>
					</div>

					<div class="form-group">
						<label>Unit Bagian *</label>
						<input name="bagian" class="form-control" value="<?=$row->bagian?>" required>
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
