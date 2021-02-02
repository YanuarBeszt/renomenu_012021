<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admin</h1>
          <!-- <h1 class="m-0 text-dark">Login Sebagai <?= $role ?></h1> -->
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><?= $brdcrmb; ?></li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Platform'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-mobile-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Platform</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Category'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-stream"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Category</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Question'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Questions</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Blog'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-newspaper"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Blog</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Blog_Keyword'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-key"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Blog Keyword</span>
              </div>
            </div>
          </a>
        </div> -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="<?= base_url('Banner'); ?>">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-tv"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-dark">Input Data Banner</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- ./card -->
    </div>
    <!-- /.col -->
  </section>

  <script>
    $(window).on("load", function() {
      $('#overlay').fadeOut(400);
    });
  </script>