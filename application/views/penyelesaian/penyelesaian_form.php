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
			<h3 class="box-title"><?=ucfirst($page)?> penyelesaian</h3>
			<div class="pull-right">
				<a href="<?=site_url('penyelesaian')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i>  Back
				</a>
			</div>
		</div>

	<div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php echo form_open_multipart('penyelesaian/process') ?> 
					<div class="form-group">
						<label>Periode *</label>
						<input type="hidden" name="id" value="<?=$row->penyelesaian_id?>">
						<input type="text" name="periode" value="<?=$row->periode?>" class="form-control" placeholder="Enter Periode" required>
					</div>

					<div class="form-group">
						<label>Unit Kerja *</label>
						<input type="text" name="unit_kerja" value="<?=$row->unit_kerja?>" class="form-control" placeholder="Enter Unit Kerja" required>
					</div>

					<div class="form-group">
						<label>File</label>
						<?php if($page == 'edit') {
							if($row->file != null) { ?>
								<div>
									<a href="<?=base_url('uploads/docpenyelesaian/'.$row->file)?>">File</a>
								</div>
							<?php
							}
						} ?>
						<input type="file" name="file" class="form-control">
					</div>

					<div class="box-footer">
						<button type="submit" name="<?=$page?>" class="btn btn-primary">Save</button>
						<button type="reset" class="btn btn-flat">Reset</button>
					</div>
				<?php echo form_close()?>
			</div>
		</div>
		<!-- /.box-body -->
	</div>
<!-- /.box -->
</section>
<!-- /.content -->
