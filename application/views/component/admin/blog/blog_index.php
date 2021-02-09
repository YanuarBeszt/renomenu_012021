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
                <?php if ($this->session->flashdata()) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('flashBlog'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div style="float: left; padding-top: 10px;">
                                <h3 class="card-title">Data Blog</h3>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div style="float: right; padding-top: 5px;">
                                <a href="<?= base_url('blog/create'); ?>" type="button" id="btnshow" class="btn btn-block btn-info" style="position: relative; z-index:20;">Tambah Data Blog</a>
                            </div>
                            <form class="form-inline" method="POST">

                                <!-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort By
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Title (A - Z)</a>
                                        <a class="dropdown-item" href="#">Title (Z - A)</a>
                                        <a class="dropdown-item" href="#">Newest</a>
                                        <a class="dropdown-item" href="#">Oldest</a>
                                    </div>
                                </div> -->
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control" name="searchKeyword" placeholder="Cari" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Header Image</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Blog Keyword</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($blog)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            Data blog tidak ditemukan
                                        </div>
                                    <?php endif; ?>
                                    <?php

                                    foreach ($blog as $b) : ?>
                                        <tr>
                                            <td><?= ++$start ?></td>
                                            <td><?= $b['title'] ?></td>
                                            <td>
                                                <img src="<?= base_url("/assets") ?>/images/upload/blog/header_image/<?= $b['header_image'] ?>" width="100" height="100">
                                            </td>
                                            <td><?= word_limiter($b['content'], 20)  ?></td>
                                            <td>
                                                <?= $b['keyword'] ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('Blog/artikel/'); ?><?= $b['id'] ?>" target="_blank" class="btn btn-primary">Detail</a>
                                                <a href="<?= base_url('blog/edit/'); ?><?= $b['id'] ?>" class="btn btn-warning">Ubah</a>
                                                <a href="<?= base_url('blog/delete/'); ?><?= $b['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach; ?>

                                </tbody>
                            </table>
                            <div class="row no-gutters d-flex justify-content-center">
                                <?= $this->pagination->create_links(); ?>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
    </section>
</div>