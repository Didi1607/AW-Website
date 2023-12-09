<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Link Science</h4>
                    <p class="mb-1">Link Science</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Animal</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Link Science</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">LinkScience
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p>
                                                <video width='200' height='150' controls>
                                                    <source src='<?= $item['ScienceImage'] ?>' type='video/mp4'>
                                                    Your browser does not support the video tag.
                                                </video>
                                            </p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" value="<?= $learnScience['LinkScience'] ?>" id="val-LinkScience" name="LinkScience">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">ScienceImage
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="<?= $learnScience['ScienceImage'] ?>" alt="" width="250px"></p>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-imagesFamyli" name="ScienceImage">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-DesScience">DesScience<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-DesScience" name="DesScience" rows="5"><?= $learnScience['DesScience'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="update_LearnScience" class="btn btn-primary p-4 m-3 w-100">
                                                    Update Learn Science</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>