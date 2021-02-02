<div class="content-wrapper">
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
    <section class="content">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-12">
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
                        <div class="card-body">
                            <form method="POST" action="create" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="blogTitle">Title</label>
                                    <input class="form-control" type="text" name="blogTitle" id="blogTitle" placeholder="Title">
                                    <small class="form-text text-danger"><?= form_error('blogTitle') ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="blogHeaderImg">Header Image</label>
                                    <input class="form-control-file" type="file" id="blogHeaderImg" name="blogHeaderImg">
                                    <small class="form-text text-danger"><?= form_error('blogHeaderImg') ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="blogKeyword">Keyword</label>
                                    <select name="keyword[]" class="form-control keyword-select" placeholder="Insert Keyword" multiple>
                                        <?php foreach ($keyword as $k) : ?>
                                            <option value="<?= $k['id'] ?>"><?= $k['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input class="form-control" type="text" name="blogKeyword" id="blogKeyword" placeholder="Keyword"> -->
                                </div>

                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="blogHeaderImg" name="blogHeaderImg">
                                        <label class="custom-file-label" for="blogHeaderImg">Choose file</label>
                                        <small class="form-text text-danger"><?= form_error('blogHeaderImg') ?></small>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="blogContent">Content</label>
                                    <textarea class="form-control" type="text" id="blogContent" name="blogContent" placeholder="Content" rows="10"></textarea>
                                    <small class="form-text text-danger"><?= form_error('blogContent') ?></small>
                                </div>
                                <button class="btn btn-primary" name="save_blog" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#blogContent').summernote({
            height: "300px",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                },
                onMediaDelete: function(target) {
                    deleteImage(target[0].src);
                }
            }
        });

        function uploadImage(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: "<?php echo site_url('blog/upload_image') ?>",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(url) {
                    $('#blogContent').summernote("insertImage", url);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

        function deleteImage(src) {
            $.ajax({
                data: {
                    src: src
                },
                type: "POST",
                url: "<?php echo site_url('blog/delete_image') ?>",
                cache: false,
                success: function(response) {
                    console.log(response);
                }
            });
        }

        $(".keyword-select").select2({

        });

    });
</script>