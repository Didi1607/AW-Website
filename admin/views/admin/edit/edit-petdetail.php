<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Edit PetDetail</h4>
                    <p class="mb-1">Edit PetDetail</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Edit PetDetail</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit PetDetail</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">

                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-NamePetDetailE">NamePetDetailE
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-NamePetDetailE" name="NamePetDetailE" value="<?= $pet_detail['NamePetDetailE'] ?>" placeholder="Enter NamePetDetailE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-NamePetDetailTV">NamePetDetailTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-NamePetDetailTV" name="NamePetDetailTV" value="<?= $pet_detail['NamePetDetailTV'] ?>" placeholder="..NamePetDetailTV!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-PetDetailDes">PetDetailDes<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="val-PetDetailDes" name="PetDetailDes" rows="5" placeholder="PetDetailDes"><?= $pet_detail['PetDetailDes'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-ImagePetDetail">ImagePetDetail
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="../admin/uploads/images/<?= $pet_detail['ImagePetDetail'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-ImagePetDetail" name="ImagePetDetail">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="petdetai_up" class="btn btn-primary p-2 m-3 w-50">
                                                    Update PetDetai</button>
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