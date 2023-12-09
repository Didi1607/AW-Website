<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Pet List</span>
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
                        <h4 class="card-title">Pet List</h4>
                        <a href="?request=add-pet" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Pet New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NamePetE</th>
                                                <th>NamePetTV</th>
                                                <th>ImagePet</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php $i = 1; ?>
                                            <?php foreach ($pet as $item) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td><?= $item['NamePetE'] ?></td>
                                                    <td><?= $item['NamePetTV'] ?></td>
                                                    <td>
                                                        <img src="../admin/uploads/images/<?= $item['ImagePet'] ?>" alt="" width="100px" height="100px">
                                                    </td>

                                                    <td>
                                                        <a href="?request=edit-pet&id=<?= $item['IdPet'] ?>" class="btn btn-primary"><i class='fa-regular fa-pen-to-square'></i> Update</a>


                                                    </td>
                                                    <td>
                                                        <a href="?request=delete-pet&id=<?= $item['IdPet'] ?>" class="btn btn-danger" onclick="return confirm('Are you surep?')"><i class='fa-solid fa-trash'></i> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                <?php else : ?>
                                 
                            <?php endif;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>