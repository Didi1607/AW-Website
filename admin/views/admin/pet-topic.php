<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">PetTopic List</span>
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
                        <h4 class="card-title">PetTopic List</h4>
                        <a href="?request=add-pettopic" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add PetTopic New</a>
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
                                                <th>IdPet</th>
                                                <th>NamePetTV</th>
                                                <th>ImagePet</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">

                                            <?php
                                            if ($Name_top_pic->num_rows > 0) {
                                                while ($row = $Name_top_pic->fetch_assoc()) {
                                                    $IdPet = $row["IdPet"];
                                                    $NamePetE = $row["NamePetE"];
                                                    $pettoppic_data[$IdPet] = $NamePetE;
                                                }
                                            } ?>

                                            <?php
                                            $i = 1;
                                            foreach ($pet_topic as $item) : ?>
                                                <?php
                                                $IdPet = $item["IdPet"];
                                                $NamePetE = isset($pettoppic_data[$IdPet]) ? $pettoppic_data[$IdPet] : '';
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= $i++; ?></th>
                                                    <td><?= $item['NamePetE'] ?></td>
                                                    <td><?= $NamePetE ?></td>
                                                    <td><?= $item['NamePetTV'] ?></td>
                                                    <td>
                                                        <img src="../admin/uploads/images/<?= $item['ImagePet'] ?>" alt="" width="100px">
                                                    </td>

                                                    <td>
                                                        <a href="?request=edit-pettopic&id=<?= $item['IdPetTopic'] ?>" class="btn btn-primary"><i class='fa-regular fa-pen-to-square'></i> Update</a>


                                                    </td>
                                                    <td>

                                                        <a href="?request=delete-pettopic&id=<?= $item['IdPetTopic'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure???')"><i class='fa-solid fa-trash'></i> Delete</a>

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