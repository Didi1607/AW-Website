<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Welcome back! </h4>
                    <p class="mb-1">Edit Family</p>
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
                        <h4 class="card-title">Edit Family</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">FamilyNameE
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="FamilyNameE" value="<?= $animal['FamilyNameE'] ?>" placeholder="Enter FamilyNameE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-referencelink">FamilyNameTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-referencelink" name="FamilyNameTV" value="<?= $animal['FamilyNameTV'] ?>" placeholder="..FamilyNameTV!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">imagesFamyli
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="uploads/<?= $animal['imagesFamyli'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-imagesFamyli" name="imagesFamyli">
                                            </div>
                                        </div>

                                    </div>

                                    <?php
                                    $ordo_data = [];

                                    if ($getName_family_edit_ordo_id->num_rows > 0) {
                                        while ($row = $getName_family_edit_ordo_id->fetch_assoc()) {
                                            $OrdoID = $row["OrdoID"];
                                            $OrdoNameE = $row["OrdoNameE"];
                                            $ordo_data[$OrdoID] = $OrdoNameE;
                                        }
                                    }
                                    ?>

                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-CountStar">OrdoID
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="val-skill" name="OrdoID">
                                                    <?php foreach ($ordo_data as $id => $name) : ?>
                                                        <option value="<?= $id ?> " hidden><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($ordo as $item) : ?>
                                                        <option value="<?= $item['OrdoID'] ?>"><?= $item['OrdoNameE'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-description">DescriptionFamily<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-Description" name="DescriptionFamily" rows="5" placeholder="DescriptionFamily"><?= $animal['DescriptionFamily'] ?>"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary p-2 m-3 w-25">
                                                    Update Family</button>
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