<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Edit Species</h4>
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
                            <form action="" method="post" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-CountStar"> Animal Data
                                                <span class="text-danger">*</span>
                                            </label>
                                            <?php
                                            $Animalid_data = [];
                                            if ($favorite_name_animal->num_rows > 0) {
                                                while ($row = $favorite_name_animal->fetch_assoc()) {
                                                    $Animalid = $row["Animalid"];
                                                    $title = $row["title"];
                                                    $Animalid_data[$Animalid] = $title;
                                                }
                                            }
                                            ?>
                                            <div class="col-lg-2">
                                                <select class="form-control" id="val-skill" name="SpeciesiD">
                                                    <?php foreach ($Animalid_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" hidden><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-7">
                                                <select class="form-control" id="val-skill" name="Animalid">
                                                    <option hidden>---Animal Data---</option>
                                                    <?php foreach ($Animal as $item) : ?>
                                                        <option value="<?= $item['id'] ?>"><?= $item['title'] ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-CountStar"> UserId
                                                <span class="text-danger">*</span>
                                            </label>
                                            <?php
                                            $ordo_data = [];

                                            if ($favorite_name->num_rows > 0) {
                                                while ($row = $favorite_name->fetch_assoc()) {
                                                    $UserId = $row["UserId"];
                                                    $username = $row["username"];
                                                    $ordo_data[$UserId] = $username;
                                                }
                                            }
                                            ?>
                                            <div class="col-lg-3">
                                                <select class="form-control" id="val-skill" name="SpeciesiD">
                                                    <?php foreach ($ordo_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" hidden><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <select class="form-control" id="val-skill" name="UserId">
                                                    <option hidden>---UserId---</option>
                                                    <?php foreach ($user as $item) : ?>
                                                        <option value="<?= $item['Id'] ?>"><?= $item['username'] ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="upload_Favorite" class="btn btn-primary p-2 m-3 w-25">
                                                    Edit Favorite</button>
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