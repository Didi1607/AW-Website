<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-1">Edit Ordo</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Ordo</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Ordo</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-OrdoNameE">OrdoNameE
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-OrdoNameE" name="OrdoNameE" value="<?= $ordo['OrdoNameE'] ?>" placeholder="Enter OrdoNameE..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-OrdoNameTV">OrdoNameTV<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-OrdoNameTV" name="OrdoNameTV" value="<?= $ordo['OrdoNameTV'] ?>" placeholder="..OrdoNameTV!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">ImageOrdo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="../admin/uploads/images/<?= $ordo['ImageOrdo'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-ImageOrdo" name="ImageOrdo">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $ordo_data = [];

                                    if ($getName_ordo_id->num_rows > 0) {
                                        while ($row = $getName_ordo_id->fetch_assoc()) {
                                            $ClassID = $row["ClassID"];
                                            $ClassNameE = $row["ClassNameE"];
                                            $ordo_data[$ClassID] = $ClassNameE;
                                        }
                                    } ?>


                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-CountStar"> OrdoID
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-7">
                                                <select class="form-control" id="val-skill" name="ClassID">
                                                    <?php
                                                    foreach ($ordo_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" selected><?= $name ?></option>
                                                    <?php endforeach; ?>

                                                    <?php
                                                    foreach ($clas as $item) : ?>
                                                        <option value="<?= $item['idclas'] ?>"><?= $item['ClassNameE'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-description">DescriptionFamily<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-DescriptionOrdo" name="DescriptionOrdo" rows="5" placeholder="DescriptionOrdo"><?= $ordo['DescriptionOrdo'] ?>"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="ordo_update" class="btn btn-primary p-2 m-3 w-25">
                                                    Update Ordo</button>
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