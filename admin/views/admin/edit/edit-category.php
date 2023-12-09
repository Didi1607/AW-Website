<div class="row">
    <div class="col-md-12">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="#"><b>Dashboard</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">

        <form action="./edit-categoryCon.php" method="post" class="shadow p-4 rounded mt-5" style="width: 90%; max-width: 50rem;">

            <h1 class="text-center pb-5 display-4 fs-3">
                Edit Category
            </h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']); ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= htmlspecialchars($_GET['success']); ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">
                    Category Name
                </label>

                <input type="text" value="<?= $category['id'] ?>" hidden name="category_id">


                <input type="text" class="form-control" value="<?= $category['name'] ?>" name="category_name">
            </div>

            <button type="submit" class="btn btn-primary">
                Update</button>
        </form>
    </div>
</div>