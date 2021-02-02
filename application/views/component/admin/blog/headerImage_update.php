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
                                <h3 class="card-title">Header Image Blog <?= $blog['id'] ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $blog['id'] ?>">

                            </form>
                        </div>
                    </div>
                </div>
    </section>
</div>