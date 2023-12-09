<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Favorite List</span>
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
                        <h4 class="card-title">Favorite List</h4>
                        <a href="?request=add_favorite" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Favorite New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>UserId</th>
                                                <th>Animalid</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($favorite_name->num_rows > 0) {
                                                while ($row = $favorite_name->fetch_assoc()) {
                                                    $UserId = $row["UserId"];
                                                    $username = $row["username"];
                                                    $ordo_data[$UserId] = $username;
                                                }
                                            }
                                            if ($favorite_name_animal->num_rows > 0) {
                                                while ($row = $favorite_name_animal->fetch_assoc()) {
                                                    $Animalid = $row["Animalid"];
                                                    $title = $row["title"];
                                                    $ordo_data[$Animalid] = $title;
                                                }
                                            }

                                            $i = 1;
                                            foreach ($favorite as $ani) {
                                                $UserId = $ani["UserId"];
                                                $username = isset($ordo_data[$UserId]) ? $ordo_data[$UserId] : '';
                                                $Animalid = $ani["Animalid"];
                                                $animalidname = isset($ordo_data[$Animalid]) ? $ordo_data[$Animalid] : '';

                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>$username</td>";
                                                echo "<td>$animalidname</td>";
                                                echo "<td><a href='?request=edit-favorite&id={$ani['Id']}' class='btn btn-warning'><i class='fa-regular fa-pen-to-square'></i> Edit</a>";
                                                echo "<a href='?request=delete-favorite&id={$ani['Id']}' class='btn btn-danger' onclick=\"return confirm('Are you sure???')\"><i class='fa-solid fa-trash'></i> Delete</a>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>
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