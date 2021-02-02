<style>
  #tbQ {
    display: block;
  }

  #questionF {
    display: none;
  }

  .card-footer {
    display: none;
  }

  #tbQ_en {
    display: block;
  }

  #questionF_en {
    display: none;
  }

  .card-footer_en {
    display: none;
  }
</style>
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
              <div style="float: left; padding-top: 10px;">
                <h3 class="card-title">Data Blog</h3>
              </div>
              <!-- <div style="float: right; padding-top: 5px;">
                <span>Language : </span>
                <a class="btn btn-dark disabled" id="btn_lang_ina"><img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia"> INA</a>
                <a class="btn btn-dark" id="btn_lang_en"><img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English"> EN</a>
              </div> -->
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div id="ina">
              <form role="form">
                <div id="questionF">
                  <div class="card-body">
                    <div style="float: right; padding-top: 5px;">
                      <button type="button" id="btnshow" class="btn btn-block btn-info" style="position: relative; z-index:20;">Show Data</button>
                    </div>
                    <div class="form-group col-md-4">
                      <br>
                      <label for="idCategory">Category</label>
                      <select class="form-control select idPFCategory" style="width: 100%;" id="idCategory" name="idCategory">
                        <option value="">-- Choose Category --</option>
                        <?php foreach ($categoryDropdown as $key) : ?>
                          <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <div class="error-Category col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group status-form" style="display: none;">
                      <label for="statusQuestion">Question status</label>
                      <select class="form-control select statusQ" style="width: 100%;" id="statusQ" name="statusQ">
                        <option value="n">Aktif</option>
                        <option value="y">Non-Aktif</option>
                      </select>
                      <div class="error-statusQuestion col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="question">Question</label>
                      <textarea class="form-control" rows="3" placeholder="Enter Your Question" name="question" id="question"></textarea>
                      <div class="error-question col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="questionTags">Question Tags</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" id="tags" name="tags">
                        <?php foreach ($tags as $key) : ?>
                          <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <div class="error-questionTags col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-group col-md-12">
                        <label for="cntents">Steps Here</label>
                        <textarea class="textarea" name="contents" placeholder="Place your Steps here ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="summernote"></textarea>
                        <div class="error-contents col-sm-10 mt-2" style="display: none;">
                          <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-question" id="tbQ">
                  <div class="card-body">
                    <div style="float: right;">
                      <button type="button" id="btnhide" class="btn btn-block btn-info">Add Data</button>
                      <br>
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table id="questionTb" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Question</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody class="bodyquestion">
                        </tbody>
                      </table>
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
            </div>
            <!-- <div id="en">
              <form role="form">
                <div id="questionF_en">
                  <div class="card-body">
                    <div style="float: right; padding-top: 5px;">
                      <button type="button" id="btnshow_en" class="btn btn-block btn-info" style="position: relative; z-index:20;">Show Data</button>
                    </div>
                    <div class="form-group col-md-4">
                      <br>
                      <label for="idCategory_en">Category</label>
                      <select class="form-control select idPFCategory_en" style="width: 100%;" id="idCategory_en" name="idCategory_en">
                        <option value="">-- Choose Category --</option>
                        <?php foreach ($CategoryDropdown as $key) : ?>
                          <option value="<?= $key->id; ?>"><?= $key->nameCategory; ?> - <?= $key->namePF; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <div class="error-Category_en col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group status-form_en" style="display: none;">
                      <label for="statusQuestion_en">Question status</label>
                      <select class="form-control select statusQ_en" style="width: 100%;" id="statusQ_en" name="statusQ_en">
                        <option value="n">Aktif</option>
                        <option value="y">Non-Aktif</option>
                      </select>
                      <div class="error-statusQuestion_en col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="question_en">Question</label>
                      <textarea class="form-control" rows="3" placeholder="Enter Your Question" name="question_en" id="question_en"></textarea>
                      <div class="error-question_en col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="questionTags_en">Question Tags</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" id="tags_en" name="tags_en">
                        <?php foreach ($tags as $key) : ?>
                          <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <div class="error-questionTags_en col-sm-10 mt-2" style="display: none;">
                        <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-group col-md-12">
                        <label for="cntents">Steps Here</label>
                        <textarea class="textarea" name="contents_en" placeholder="Place your Steps here ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="summernote_en"></textarea>
                        <div class="error-contents col-sm-10 mt-2" style="display: none;">
                          <h5 style="font-size: 16px; color: red;">Tidak Boleh Kosong</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-question_en" id="tbQ_en">
                  <div class="card-body">
                    <div style="float: right;">
                      <button type="button" id="btnhide_en" class="btn btn-block btn-info">Add Data</button>
                      <br>
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table id="questionTb_en" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Question</th>
                            <th>Platform - Category</th>
                            <th>Status</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody class="bodyquestion_en">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> -->
            <!-- /.card-body -->

            <div class="card-footer_en">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-block btn-primary" id="store_btn_en">Submit</button>
              </div>
              <div class="row tempat-edit_en" style="display:none;">
                <div class="col-sm-6">
                  <input type="hidden" class="form-control" id="hiddenVal_en" name="hiddenVal_en">
                  <button type="submit" id="update_btn_en" class="btn btn-block btn-primary">Save</button>
                </div>
                <div class="col-sm-6">
                  <button type="button" id="cancel_btn_en" style="background-color:#b5bbc8;" class="btn btn-block">Cancel</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- /.row -->
<!-- ./card -->
<!-- /.col -->
</section>
</div>

<script type="text/javascript" src="<?= base_url() . 'assets/js/custom/question.js?' . 'random=' . uniqid() ?> "></script>

<script type="text/javascript">
  $(window).on("load", function() {
    $('#overlay').fadeOut(400);
  });
</script>