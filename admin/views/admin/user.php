<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Admin Account List</span>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <section id="alertSection" style="color: red;"><?= $alert ?? '' ?></section>

                        <h4 class="card-title">Admin Account List</h4>
                         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registerModal">
                                                        <i class="fa-solid fa-user"></i>
                                                  Create Account  </button>
                                                    
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                        
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>FullName</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($user as $item) :

                                    ?>
                                        <tr style="color: #000;">
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $item['username'] ?></td>
                                            <td><i class="fa-solid fa-file-signature"></i> <?= $item['full_name'] ?></td>
                                            <td><i class="fa-regular fa-envelope"></i> <?= $item['email'] ?></td>
                                            <td><i class="fa-solid fa-map-location-dot"></i> <?= $item['address'] ?></td>
                                            <?php if ($item['role'] == 3) : ?>
                                                <td>
                                                    <?php if ($item['role'] == 0) : ?>
                                                        User
                                                    <?php elseif ($item['role'] == 1) : ?>
                                                        Member
                                                    <?php elseif ($item['role'] == 2) : ?>
                                                        Employee
                                                    <?php elseif ($item['role'] == 3) : ?>
                                                        Admin
                                                    <?php else : ?>
                                                        Không xác định
                                                    <?php endif; ?>
                        
                                                    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="registerModalLabel">Create Account</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            
                                                                <form action="" method="post">
                                                                    <div class="mb-3">
                                                                        <label for="inputUsername" class="form-label">Username</label>
                                                                        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Enter Username">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputUsername" class="form-label">Full Name</label>
                                                                        <input type="text" name="full_name" class="form-control" id="inputUsername" placeholder="Full Name">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputEmail" class="form-label">Email</label>
                                                                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter Email">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputaddress" class="form-label">address</label>
                                                                        <input type="text" name="address" class="form-control" id="inputaddress" placeholder="Enter Address">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputPassword" class="form-label">Password</label>
                                                                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Password">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="inputRePassword" class="form-label">Re-Enter Password</label>
                                                                        <input type="password" class="form-control" id="inputRePassword" placeholder="Re-Enter Password">
                                                                        <span id="passwordMatchMessage" style="color: red;"></span>
                                                                    </div>
                                                                    <select class="form-select mb-4" name="role" aria-label="Default select example">
                                                                        <option selected>--- Role ---</option>
                                                                        <option value="0">User</option>
                                                                        <option value="1">Member</option>
                                                                        <option value="2">Employee</option>
                                                                        <option value="3">Admin</option>
                                                                    </select>
                                                                    <button type="submit" name="add_user_role" class="btn btn-primary">Create Account</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>
                                                <?php endif; ?>
                                               

                                                
                                                <?php if ($item['role'] == 2) : ?>
                                                <td>
                                                    <?php if ($item['role'] == 0) : ?>
                                                        User
                                                    <?php elseif ($item['role'] == 1) : ?>
                                                        Member
                                                    <?php elseif ($item['role'] == 2) : ?>
                                                       Employee
                                                    <?php elseif ($item['role'] == 3) : ?>
                                                        Admin
                                                    <?php else : ?>
                                                        UnUser
                                                    <?php endif; ?>
                                        
                                                       <td> <a href="?request=edit-user&id=<?= $item['Id'] ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i>Update</a></td>                           
                                                <td> 
                                                   
                                                    <a href="?request=delete-user&id=<?= $item['Id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>Delete</a></td>
                                                <?php endif; ?>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>