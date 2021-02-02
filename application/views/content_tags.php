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
              <h3 class="card-title">Form Data Tags</h3>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->
            <!-- form start -->
            <form role="form" id="tagsF">
              <div class="card-body">
                <div class="form-group">
                  <label for="nametags">Tag name</label>
                  <input type="text" class="form-control" id="nametags" name="nametags" placeholder="Tag Name">
                  <div class="error-nametags col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
                </div>
                <div class="form-group status-form" style="display: none;">
                  <label for="statustags">Tag status</label>
                  <select class="form-control select statustags" style="width: 100%;" id="statustags" name="statustags">
                    <option value="n">Aktif</option>
                    <option value="y">Non-Aktif</option>
                  </select>
                  <div class="error-statusPF col-sm-10 mt-2" style="display: none;">
                    <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                  </div>
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
            <!-- form start -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Tags</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table id="tagsTb" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tags name</th>
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
  <script type="text/javascript" src="<?= base_url() . 'assets/js/custom/tags.js?' . 'random=' . uniqid() ?> "></script>

  <script>
    $(window).on("load", function() {
      $('#overlay').fadeOut(400);
    });
  </script>