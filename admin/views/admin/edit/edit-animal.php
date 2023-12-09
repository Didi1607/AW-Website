<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Welcome back! </h4>
                    <p class="mb-1">Edit New Animal</p>

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
                    <section id="alertSection" style="color: red;"><?= $alert ?? '' ?></section>
                    <div class="card-header">
                        <h4 class="card-title">Edit New Animal</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Animal Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="title" value="<?= $animal['title'] ?>" placeholder="Enter animal title..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-referencelink">Animal ReferenceLink<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-referencelink" name="ReferenceLink" value="<?= $animal['ReferenceLink'] ?>" placeholder="..animal referenceLink!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Speciesimage">Animal Speciesimage
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="<?= $animal['Speciesimage'] ?>" alt="" width="250px"></p>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-Speciesimage" name="Speciesimage">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-animalvideo">Animal AnimalVideo<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">

                                                <video width="260" height="180" controls>
                                                    <source src="<?= $animal['AnimalVideo'] ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>

                                                <input type="file" class="form-control" id="val-Video" name="AnimalVideo" placeholder="Your AnimalVideo">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-description">Animal Description<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-Description" name="description" rows="5" placeholder="Description"><?= $animal['description'] ?>"</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Animal iFact
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-iFact" name="iFact" value="<?= $animal['iFact'] ?>" placeholder="Animal iFact">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-favorite"> Animal Favorite
                                                <span class="text-danger">*</span>
                                            </label>

                                            <div class="col-lg-6">
                                                <span>
                                                    <ul style="list-style: none;">
                                                        <li>
                                                            <input type="radio" <?= $animal['Favorite'] == 1 ? 'checked' : '' ?> value="1" name="Favorite" class="form-check-input">
                                                            <label class="form-check-label">
                                                                Active
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" <?= $animal['Favorite'] == 0 ? 'checked' : '' ?> value="0" name="Favorite" class="form-check-input">
                                                            <label class="form-check-label">
                                                                Unactive
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-favorite"> Animal IsVietnam
                                                <span class="text-danger">*</span>
                                            </label>

                                            <div class="col-lg-6">
                                                <span>
                                                    <ul style="list-style: none;">
                                                        <li>
                                                            <input type="radio" <?= $animal['isVietnam'] == 1 ? 'checked' : '' ?> value="1" name="isVietnam" class="form-check-input">
                                                            <label class="form-check-label">
                                                                Active
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input class="form-check-input" type="radio" name="isVietnam" value="0">
                                                            <input type="radio" <?= $animal['isVietnam'] == 0 ? 'checked' : '' ?> value="0" name="isVietnam" class="form-check-input">
                                                            <label class="form-check-label">
                                                                Unactive
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountView">Animal CountView
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-CountView" name="CountView" value="<?= $animal['CountView'] ?>" placeholder="Animal CountView">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar">Animal CountStar
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-CountStar" name="CountStar" value="<?= $animal['CountStar'] ?>">
                                            </div>
                                        </div>

                                        <?php
                                        $species_data = [];

                                        if ($getName_animal_edit_Species_id->num_rows > 0) {
                                            while ($row = $getName_animal_edit_Species_id->fetch_assoc()) {
                                                $speciesiD = $row["SpeciesiD"];
                                                $speciesNameE = $row["SpeciesNameE"];
                                                $species_data[$speciesiD] = $speciesNameE;
                                            }
                                        }

                                        ?>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-CountStar">SpeciesiD
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="val-skill" name="SpeciesiD">
                                                    <?php
                                                    foreach ($species_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" selected><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($species as $item) : ?>
                                                        <option value="<?= $item['SpeciesID'] ?>"><?= $item['SpeciesNameE'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="animal_up" class="btn btn-primary p-2 m-3">
                                                    Edit Animal</button>
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