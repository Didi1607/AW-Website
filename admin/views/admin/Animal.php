<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Animal List</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <?php
        if (isset($_SESSION['success_message'])) {
            echo '<div class="success-message">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']);
        }
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Animal List</h4>
                        <a href="?request=add_animal" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add New</a>
                    </div>
                    <?php foreach ($user as $item) :
                        if ($item['role'] == 3) : ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>SpeciesiD</th>
                                                <th>IsVietnam</th>
                                                <th>SpeciesImage</th>
                                                <th>ReferenceLink</th>
                                                <th>AnimalVideo</th>
                                                <th>iFact</th>
                                                <th>Favorite</th>
                                                <th>CountView</th>
                                                <th>CountStar</th>
                                                <th>Description</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($species_name->num_rows > 0) {
                                                while ($row = $species_name->fetch_assoc()) {
                                                    $speciesiD = $row["SpeciesiD"];
                                                    $speciesNameE = $row["SpeciesNameE"];
                                                    $species_data[$speciesiD] = $speciesNameE;
                                                }
                                            }
                                            $i = 1;
                                            foreach ($dataproduct as $ani) {
                                                $speciesiD = $ani["SpeciesiD"];
                                                $speciesNameE = isset($species_data[$speciesiD]) ? $species_data[$speciesiD] : '';
                                                $descriptionAnimal = $ani['description'];

                                                if (strlen($descriptionAnimal) > 50) {
                                                    $limitedDescription = substr($descriptionAnimal, 0, 50) . '...';
                                                } else {
                                                    $limitedDescription = $descriptionAnimal;
                                                }
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>{$ani['title']}</td>";
                                                echo "<td>{$speciesNameE}</td>";
                                                echo "<td>" . ($ani['isVietnam'] == 1 ? 'có' : 'không') . "</td>";
                                                echo "<td><img width='100' src='{$ani['Speciesimage']}'></td>";
                                                echo "<td>{$ani['ReferenceLink']}</td>";
                                                echo "<td><video width='260' height='160' controls>
                                                    <source src='{$ani['AnimalVideo']}' type='video/mp4'>
                                                    Your browser does not support the video tag.
                                                </video></td>";
                                                echo "<td>{$ani['iFact']}</td>";
                                                echo "<td>{$ani['Favorite']}</td>";
                                                echo "<td>{$ani['CountView']}</td>";
                                                echo "<td>{$ani['CountStar']}</td>";
                                                echo "<td>{$limitedDescription}</td>";

                                                echo "<td><a href='?request=edit-animal&id={$ani['id']}' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i> Update</a>";
                                                echo "<td><a href='?request=delete-animal&id={$ani['id']}' class='btn btn-danger' onclick=\"return confirm('Are you sure???')\"><i class='fa-solid fa-trash'></i> Delete</a>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                  
                                </div>
                            </div>
                    <?php endif;
                    endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>