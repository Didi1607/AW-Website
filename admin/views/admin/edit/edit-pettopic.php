<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Edit Pettopic</h4>
                    <p class="mb-1">Edit Pettopic</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Pettopic</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Pettopic</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-NamePetE">NamePetE
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-NamePetE" name="NamePetE" value="<?= $pet['NamePetE'] ?>" placeholder="Enter NamePetE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-NamePetTV">NamePetTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-NamePetTV" name="NamePetTV" value="<?= $pet['NamePetTV'] ?>" placeholder="..NamePetTV!">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $pettoppic_data = [];
                                    if ($Name_top_pic->num_rows > 0) {
                                        while ($row = $Name_top_pic->fetch_assoc()) {
                                            $IdPet = $row["IdPet"];
                                            $NamePetE = $row["NamePetE"];
                                            $pettoppic_data[$IdPet] = $NamePetE;
                                        }
                                    } ?>

                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-CountStar"> IdPet
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-3">
                                                <select class="form-control" id="val-skill" name="SpeciesiD">
                                                    <?php foreach ($pettoppic_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" hidden><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-7">
                                                <select class="form-control" id="val-skill" name="IdPet">
                                                    <option hidden>---IdPet---</option>
                                                    <?php foreach ($pet_name as $item) : ?>
                                                        <option value="<?= $item['IdPet'] ?>"><?= $item['NamePetE'] ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-ImagePet">ImagePet
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="../admin/uploads/images/<?= $pet['ImagePet'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-ImagePet" name="ImagePet">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12 ml-auto">
                                                <button type="submit" name="petdetail_up" class="btn btn-primary p-2 m-3 w-25">
                                                    Update Petdetail</button>
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