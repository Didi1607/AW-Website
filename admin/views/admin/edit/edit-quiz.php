<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back! Edit Family</h4>
                    <p class="mb-1"> Edit Family</p>
                    <section style="color: red;"><?= $alert ?? '' ?></section>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">New Family</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Family</h4>
                        <section style="color: red;"><?= $alert ?? '' ?></section>
                    </div>
                    <div class="card-body">
                        <div class="form-validation" style="color: #000;">
                            <form action="" method="post" enctype="multipart/form-data" class="form-valide">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-imageQuiz">imageQuiz
                                                <span class="text-danger">*</span>
                                            </label>
                                            <p><img src="../admin/uploads/<?= $quiz['imageQuiz'] ?>" alt="" width="250px"></p>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-imageQuiz" name="imageQuiz">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-AskA">AskA<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-AskA" name="AskA" rows="5" placeholder="AskA"><?= $quiz['AskA'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-AskB">AskB<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-AskB" name="AskB" rows="5" placeholder="AskB"><?= $quiz['AskB'] ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-AskC">AskC<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-AskC" name="AskC" rows="5" placeholder="AskC"><?= $quiz['AskC'] ?></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-AskD">AskD<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-AskD" name="AskD" rows="5" placeholder="AskD"><?= $quiz['AskD'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-12 col-form-label" for="val-Ans">Ans<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="val-Ans" name="Ans" rows="5" placeholder="Ans"><?= $quiz['Ans'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="update_quiz" class="btn btn-primary p-2 m-3 w-25">
                                                    Update Quiz</button>
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