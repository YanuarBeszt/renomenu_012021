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
                                <h3 class="card-title">Data Blog <?= $blog['id'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                                <input type="hidden" id="old_headerImage" name="old_headerImage" value="<?= $blog['header_image'] ?>">
                                <div class="form-group">
                                    <label for="blogTitle">Title</label>
                                    <input class="form-control" type="text" name="blogTitle" id="blogTitle" placeholder="Title" value="<?= $blog['title'] ?>">
                                    <small class="form-text text-danger"><?= form_error('blogTitle') ?></small>
                                </div>
                                <?php if ($blog['header_image'] != NULL) : ?>
                                    <img src="<?= base_url() ?>assets/images/upload/blog/header_image/<?= $blog['header_image'] ?>" width="50%" alt="">
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="blogHeaderImg">Header Image</label>
                                    <input class="form-control-file" type="file" id="blogHeaderImg" name="blogHeaderImg">
                                    <small class="form-text text-danger"><?= form_error('blogHeaderImg') ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="keyword[]">Keyword</label>
                                    <select name="keyword[]" class="form-control keyword-select" placeholder="Insert Keyword" multiple>
                                        <?php foreach ($keyword as $k) { ?>
                                            <option value="<?= $k['id'] ?>" <?php
                                                                            foreach ($keyword_id as $kId) {
                                                                                if ($kId['keyword_id'] == $k['id']) {
                                                                                    echo 'selected';
                                                                                } else {
                                                                                    echo '';
                                                                                }
                                                                            } ?>><?= $k['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('keyword[]') ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="blogContent">Content</label>
                                    <textarea class="form-control" type="text" id="blogContent" name="blogContent" placeholder="Content" rows="100"><?= $blog['content'] ?></textarea>
                                    <small class="form-text text-danger"><?= form_error('blogContent') ?></small>
                                </div>
                                <button class="btn btn-primary" type="submit" onclick="return confirm('Apakah anda yakin mengedit data ini?')">Ubah</button>
                            </form>
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