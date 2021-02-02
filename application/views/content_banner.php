<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Data Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="BannerF">
              <div class="card-body">
                <div class="form-group">
                  <label for="nameBanner">Banner name</label>
                  <input type="text" class="form-control" id="nameBanner" name="nameBanner" placeholder="Banner Name">
                  <div class="error-nameBanner col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group">
                  <label for="urlBanner">Banner url</label>
                  <input type="text" class="form-control" id="urlBanner" name="urlBanner" placeholder="Banner url">
                  <div class="error-urlBanner col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group status-form" style="display: none;">
                  <label for="statusBanner">Banner status</label>
                  <select class="form-control select statusBanner" style="width: 100%;" id="statusBanner" name="statusBanner">
                    <option value="n">Aktif</option>
                    <option value="y">Non-Aktif</option>
                  </select>
                  <div class="error-statusBanner col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group">
                  <label for="imageBanner">Upload Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="imageBanner" name="imageBanner">
                      <label class="custom-file-label" for="imageBanner" id="file_name">Choose file</label>
                    </div>
                  </div>
                  <div class="error-nameBanner col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="image-edit" style="display: none;">
                  <img id="image_position" src="" alt="" style="max-width: 50%; height:auto;">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-block btn-primary" id="store_btn">Submit</button>
                </div>
                <div class="row tempat-edit" style="display:none;">
                  <div class="col-sm-6">
                    <input type="hidden" class="form-control" id="hiddenVal" name="hiddenVal">
                    <button type="submit" id="update_btn" class="btn btn-block btn-primary">Save</button>
                  </div>
                  <div class="col-sm-6">
                    <button type="button" id="cancel_btn" style="background-color:#b5bbc8;" class="btn btn-block">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Banners</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive text-nowrap">

                <table id="BannerTb" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Banner name</th>
                      <th>Status</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody class="bodyBanner">
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->
      <!-- ./card -->
    </div>
    <!-- /.col -->
  </section>
  <script type="text/javascript" src="<?= base_url() . 'assets/js/custom/banner.js?' . 'random=' . uniqid() ?> "></script>

  <script>
    $(window).on("load", function() {
      $('#overlay').fadeOut(400);
    });
  </script>