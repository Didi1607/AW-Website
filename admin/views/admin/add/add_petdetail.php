<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Add New Pet Detail</h4>
                    <p class="mb-1">Add New Pet Detail</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Pet Detail</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <section id="alertSection" style="color: red;"><?= $alert ?? '' ?></section>
                    <div class="card-header">
                        <h4 class="card-title">Add New Pet Detail</h4>
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
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-NamePetDetailE" name="NamePetDetailE" placeholder="Enter NamePetDetailE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-NamePetDetailTV">NamePetDetailTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-NamePetDetailTV" name="NamePetDetailTV" placeholder="..NamePetDetailTV!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-ImagePetDetail">ImagePetDetail<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-ImagePetDetail" name="ImagePetDetail" placeholder="..ImagePetDetail!">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-CountStar"> IdPetTopic
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" id="val-skill" name="IdPetTopic">
                                                    <option hidden>---IdPetTopic---</option>
                                                    <?php foreach ($pet_topic as $item) : ?>
                                                        <option value="<?= $item['IdPet'] ?>"><?= $item['NamePetE'] ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-PetDetailDes">PetDetailDes<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="val-PetDetailDes" name="PetDetailDes" rows="5" placeholder="PetDetailDes"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="petdeil_upload" class="btn btn-primary p-2 m-3 w-25">
                                                    Add Pet Detail</button>
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