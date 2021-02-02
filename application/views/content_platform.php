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
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Data Platform</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="platformF">
              <div class="card-body">
                <div class="form-group">
                  <label for="namePF">Platform name</label>
                  <input type="text" class="form-control" id="namePF" name="namePF" placeholder="Platform Name">
                  <div class="error-namePF col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group status-form" style="display: none;">
                  <label for="statusPF">Platform status</label>
                  <select class="form-control select statusPF" style="width: 100%;" id="statusPF" name="statusPF">
                    <option value="n">Active</option>
                    <option value="y">Non-Active</option>
                  </select>
                  <div class="error-statusPF col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group">
                  <label for="imagePF">Upload Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="imagePF" name="imagePF">
                      <label class="custom-file-label" for="imagePF" id="file_name">Choose file</label>
                    </div>
                  </div>
                  <div class="error-namePF col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="image-edit" style="display: none;">
                  <img id="image_position" src="" alt="" style="max-width: 50px; height:auto;">
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
              <h3 class="card-title">Data Platforms</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table id="platformTb" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Platform name</th>
                      <th>Status</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody class="bodyPf">
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
  <script type="text/javascript" src="<?= base_url() . 'assets/js/custom/platform.js?' . 'random=' . uniqid() ?> "></script>

  <script>
    $(window).on("load", function() {
      $('#overlay').fadeOut(400);
    });
  </script>