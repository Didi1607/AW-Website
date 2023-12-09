<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Add KnowLedgeBase</h4>
                    <p class="mb-1">Add New KnowLedgeBase</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New KnowLedgeBase</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <section id="alertSection" style="color: red;"><?= $alert ?? '' ?></section>

                    <div class="card-header">
                        <h4 class="card-title">Add New KnowLedgeBase</h4>
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
                                                <input type="text" class="form-control" id="val-username" name="title" placeholder="Enter animal title..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-Title">Title<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-Title" name="Title" placeholder="..Title!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-KnowledgeBaseImage">KnowledgeBaseImage
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-KnowledgeBaseImage" name="KnowledgeBaseImage" placeholder="Choose a safe one..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-KnowledgeBaseVideo">KnowledgeBaseVideo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-KnowledgeBaseVideo" name="KnowledgeBaseVideo" placeholder="KnowledgeBaseVideo">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-KnowledgeBaseDescription">KnowledgeBaseDescription<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-KnowledgeBaseDescription" name="KnowledgeBaseDescription" rows="5" placeholder="Description"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-KnowledgeBaseReference">KnowledgeBaseReferencet
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-KnowledgeBaseReference" name="KnowledgeBaseReference" placeholder="KnowledgeBaseReference">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar"> IdClass
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="val-skill" name="IdClass">
                                                <option hidden>---IdClass---</option>

                                                <?php foreach ($class as $item) : ?>
                                                    <option value="<?= $item['idclas']; ?>"><?= $item['ClassNameE']; ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar"> IdOrdo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="val-skill" name="IdOrdo">
                                                <option hidden>---IdOrdo---</option>
                                                <?php foreach ($ordo as $item) : ?>
                                                    <option value="<?= $item['OrdoID'] ?>"><?= $item['OrdoNameE'] ?></option>
                                                <?php endforeach;  ?>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar"> IdFamily
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="val-skill" name="IdFamily">
                                                <option hidden>---IdFamily---</option>
                                                <?php foreach ($family as $item) : ?>
                                                    <option value="<?= $item['FamilyID'] ?>"><?= $item['FamilyNameE'] ?></option>
                                                <?php endforeach;  ?>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="up_know" class="btn btn-primary p-2 m-3">
                                                    Add KnowLedgeBase</button>
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