<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Edit LearnScience</h4>
                    <p class="mb-1">Edit LearnScience</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New LearnScience</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit LearnScience</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">ScienceImage
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="../admin/uploads/images/<?= $le['KnowledgeBaseImage'] ?>" alt="" width="250px"></p>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-imagesFamyli" name="KnowledgeBaseImage">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Title">Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-Title" name="Title" value="<?= $le['Title'] ?>">
                                            </div>
                                        </div>

                                        <?php
                                        $knowledgebase_data = [];
                                        $ordo_data = [];
                                        $family_data = [];

                                        if ($getName_knowledgebase_id->num_rows > 0) {
                                            while ($row = $getName_knowledgebase_id->fetch_assoc()) {
                                                $ClassID = $row["IdClass"];
                                                $ClassNameE = $row["ClassNameE"];
                                                $knowledgebase_data[$ClassID] = $ClassNameE;
                                            }
                                        }

                                        if ($getName_ordo_edit_knowledgebase_id->num_rows > 0) {
                                            while ($row = $getName_ordo_edit_knowledgebase_id->fetch_assoc()) {
                                                $IdOrdo = $row["IdOrdo"];
                                                $OrdoNameE = $row["OrdoNameE"];
                                                $ordo_data[$IdOrdo] = $OrdoNameE;
                                            }
                                        }

                                        if ($getName_ordo_edit_family_id->num_rows > 0) {
                                            while ($row = $getName_ordo_edit_family_id->fetch_assoc()) {
                                                $IdFamily = $row["IdFamily"];
                                                $FamilyNameE = $row["FamilyNameE"];
                                                $family_data[$IdFamily] = $FamilyNameE;
                                            }
                                        }

                                        ?>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Title">Species Author
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="IdClass">
                                                    <?php
                                                    foreach ($knowledgebase_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" selected><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($class as $item) : ?>
                                                        <option value="<?= $item['idclas']; ?>"><?= $item['ClassNameE']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Title">Species Author
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="IdOrdo" class="form-control" aria-label="Default select example">
                                                    <?php
                                                    foreach ($ordo_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" selected><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($ordo as $item) : ?>
                                                        <option value="<?= $item['OrdoID']; ?>"><?= $item['OrdoNameE']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Title">Species Author
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="IdFamily" class="form-control" aria-label="Default select example">
                                                    <?php
                                                    foreach ($family_data as $id => $name) : ?>
                                                        <option value="<?= $id ?>" selected><?= $name ?></option>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($family as $item) : ?>
                                                        <option value="<?= $item['FamilyID']; ?>"><?= $item['FamilyNameE']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imagesFamyli">KnowledgeBaseVideo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p>
                                                <video width="320" height="240" controls>
                                                    <source src="uploads/videos/<?= $le['KnowledgeBaseVideo'] ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </p>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-KnowledgeBaseVideo" name="KnowledgeBaseVideo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-KnowledgeBaseDescription">KnowledgeBaseDescription<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-KnowledgeBaseDescription" name="KnowledgeBaseDescription" rows="5"><?= $le['KnowledgeBaseDescription'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-KnowledgeBaseReference">KnowledgeBaseReference<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-KnowledgeBaseReference" name="KnowledgeBaseReference" rows="5"><?= $le['KnowledgeBaseReference'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="edit_knowledgebase" class="btn btn-primary p-4 m-3 w-100">
                                                    Update Learn knowledgebase</button>

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
</div>