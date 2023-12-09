<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Add New List Favorite</h4>
                    <p class="mb-1">Add New List Favorite</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New List Favorite</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New List Favorite</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body p-5">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar"> Animal Data
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="val-skill" name="Animalid">
                                                <option hidden>---Animal Data---</option>
                                                <?php foreach ($Animal as $item) : ?>
                                                    <option value="<?= $item['id'] ?>"><?= $item['title'] ?></option>
                                                <?php endforeach;  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-CountStar"> UserId
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" id="val-skill" name="UserId">
                                                <option hidden>---UserId---</option>
                                                <?php foreach ($user as $item) : ?>
                                                    <option value="<?= $item['Id'] ?>"><?= $item['username'] ?></option>
                                                <?php endforeach;  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="upload" class="btn btn-primary p-2 m-3 w-25">
                                                    Add Favorite</button>
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