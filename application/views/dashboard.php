<section class="content-header">
	<h1>
		Dashboard
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$this->fungsi->count_item()?></h3>
              <p>Usulan</p>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-bag"></i>
            </div> -->
            <a href="<?=site_url('usulan')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$this->fungsi->count_panjar()?></h3>
              <p>Panjar</p>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->
            <a href="<?=site_url('panjar')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$this->fungsi->count_kembali_panjar()?></h3>
              <p>Kembali Panjar</p>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-person-add"></i>
            </div> -->
            <a href="<?=site_url('kembali_panjar')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$this->fungsi->count_penyelesaian()?></h3>

              <p>Penyelesaian</p>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div> -->
            <a href="<?=site_url('penyelesaian')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
