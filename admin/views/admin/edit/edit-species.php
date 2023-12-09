<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Welcome back!</h4>
                    <p class="mb-1">Edit Species</p>
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
                        <h4 class="card-title">Edit Species</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">SpeciesNameE
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="SpeciesNameE" value="<?= $species['SpeciesNameE'] ?>" placeholder="Enter SpeciesNameE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-referencelink">SpeciesNameTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-referencelink" name="SpeciesNameTV" value="<?= $species['SpeciesNameTV'] ?>" placeholder="..SpeciesNameTV!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">imagesFamyli
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="uploads/<?= $species['imageSpecies'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-imagesFamyli" name="imagesFamyli">
                                            </div>
                                        </div>
                                    </div>

                                    <?php

                                    $species_data = [];

                                    if ($getName_species_edit_family_id->num_rows > 0) {
                                        while ($row = $getName_species_edit_family_id->fetch_assoc()) {
                                            $FamilyID = $row["FamilyID"];
                                            $FamilyNameE = $row["FamilyNameE"];
                                            $species_data[$FamilyID] = $FamilyNameE;
                                        }
                                    }
                                    ?>

                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-CountStar"> FamilyID
                                                <span class="text-danger">*</span>

                                            </label>
                                            <div class="col-lg-3">
                                                <select class="form-control" id="val-skill" name="FamilyID">
                                                    <?php foreach ($species_data as $id => $name) : ?>
                                                        <option value="<?= $id ?> " selected><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($family as $item) : ?>
                                                        <option value="<?= $item['FamilyID'] ?>"><?= $item['FamilyNameE'] ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-description">Description Species<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-Description" name="descriptionSpecies" rows="5" placeholder="Description Species"><?= $species['descriptionSpecies'] ?>"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary p-2 m-3 w-50">
                                                    Update Species</button>
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