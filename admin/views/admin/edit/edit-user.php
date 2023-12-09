<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                            <div class="profile-photo">
                                <img src="./public/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary"><?= $animal['username'] ?></h4>
                                                <p><i class="fa-solid fa-file-signature"></i> Username</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted"><?= $animal['email'] ?></h4>
                                                <p><i class="fa-regular fa-envelope"></i> Email</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 prf-col">
                                            <div class="profile-call">
                                                <h4 class="text-muted">Address</h4>
                                                <p><?= $animal['address'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-interest mt-4 pb-2 border-bottom-1">
                            <h5 class="text-primary d-inline">Interest</h5>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="./public/images/profile/2.jpg" alt="" class="img-fluid">
                                        <p>Shopping Mall</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="./public/images/profile/3.jpg" alt="" class="img-fluid">
                                        <p>Photography</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="./public/images/profile/4.jpg" alt="" class="img-fluid">
                                        <p>Art &amp; Gallery</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-news mt-4 pb-3">
                            <h5 class="text-primary d-inline">Describe News</h5>
                            <div class="media pt-3 pb-3">
                                <img src="./public/images/profile/5.jpg" alt="image" class="mr-3">
                                <div class="media-body">
                                    <h5 class="m-b-5"><?= $animal['full_name'] ?></h5>
                                    <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link active show">Setting Edit Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting Edit Profile</h4>
                                                <form action="" method="post">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Email</label>
                                                            <input type="email" name="email" placeholder="Email" value="<?= $animal['email'] ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>User Name</label>
                                                            <input type="text" name="username" value="<?= $animal['username'] ?>" placeholder="User Name" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>FullName</label>
                                                            <input type="text" name="full_name" value="<?= $animal['full_name'] ?>" placeholder="Full Name" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" value="<?= $animal['address'] ?>" placeholder="Address" class="form-control">
                                                        </div>
                                                    </div>
                                                   
                                                    <button type="submit" class="btn btn-primary p-2 m-3 w-25">
                                                        Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>