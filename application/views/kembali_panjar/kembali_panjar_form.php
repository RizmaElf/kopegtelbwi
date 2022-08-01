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
			<h3 class="box-title"><?=ucfirst($page)?> Kembali Panjar</h3>
			<div class="pull-right">
				<a href="<?=site_url('kembali_panjar')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i>  Back
				</a>
			</div>
		</div>
	</div>

	<div class="box-body">
		<div class="row">
			<?php //echo validation_errors(); ?>
			<div class="col-md-4 col-md-offset-4">
				<form action="<?=site_url('kembali_panjar/process')?>" method="post">
					<div class="form-group">
						<label>Date *</label>
						<input type="hidden" name="id" value="<?=$row->kembalipanjar_id?>">
						<input type="text" name="date" value="<?=$row->date?>" class="form-control" placeholder="Enter kembali_panjar Name" required>
					</div>

					<div class="form-group">
						<label>No. Akun *</label>
						<input type="text" name="no_akun" value="<?=$row->no_akun?>" class="form-control" placeholder="Enter Phone Number" required>
					</div>

					<div class="form-group">
						<label>Unit Kerja *</label>
						<input name="unit_kerja" class="form-control" value="<?=$row->unit_kerja?>" required>
					</div>

					<div class="form-group">
						<label>Uraian *</label>
						<input name="uraian" class="form-control" value="<?=$row->uraian?>" required>
					</div>

					<div class="form-group">
						<label>Sub Jumlah *</label>
						<input name="sub_jumlah" class="form-control" value="<?=$row->sub_jumlah?>" required>
					</div>

					<div class="form-group">
						<label>Jumlah *</label>
						<input name="jumlah" class="form-control" value="<?=$row->jumlah?>" required>
					</div>

					<div class="form-group">
						<label>Keterangan *</label>
						<input name="keterangan" class="form-control" value="<?=$row->keterangan?>" required>
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
