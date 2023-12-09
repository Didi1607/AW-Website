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

<div class="col-md-12">
    <div class="tile container">
        <h3 class="tile-title">Animal List User</h3>
        <div class="w-100 shadow p-4 rounded mt-5">

            <form action="" method="post">
                <h1 class="text-center pb-5 display-4 fs-3">
                    Add New User
                </h1>
                <section style="color: red;"><?= $alert ?? '' ?></section>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">
                                User name
                            </label>
                            <input type="text" class="form-control" name="username" placeholder="User name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">
                                User Full_name
                            </label>
                            <input type="text" class="form-control" name="full_name" placeholder="User Full_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">
                                User Email
                            </label>
                            <input type="email" class="form-control" name="email" placeholder="User Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">
                                User Password
                            </label>
                            <input type="password" class="form-control" name="password" placeholder="User Password">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">
                                User Address
                            </label>
                            <input type="text" class="form-control" name="address" placeholder="User Address">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary p-4 m-3 w-100">
                        Add User</button>
                </div>

            </form>
        </div>
    </div>
    <!-- / div trống-->
</div>
</div>