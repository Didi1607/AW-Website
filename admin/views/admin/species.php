<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Species List</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Species</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Species List</h4>
                        <a href="?request=add-species" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Species New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>FamilyID</th>
                                                <th>imageSpecies</th>
                                                <th>SpeciesNameE</th>
                                                <th>SpeciesNameTV</th>
                                                <th>descriptionSpecies</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($species_name->num_rows > 0) {
                                                while ($row = $species_name->fetch_assoc()) {
                                                    $FamilyID = $row["FamilyID"];
                                                    $FamilyNameE = $row["FamilyNameE"];
                                                    $ordo_data[$FamilyID] = $FamilyNameE;
                                                }
                                            }

                                            $i = 1;
                                            foreach ($species as $ani) {
                                                $FamilyID = $ani["FamilyID"];
                                                $FamilyNameE = isset($ordo_data[$FamilyID]) ? $ordo_data[$FamilyID] : '';
                                                $descriptionSpecies = $ani['descriptionSpecies'];

                                                if (strlen($descriptionSpecies) > 150) {
                                                    $limitedDescription = substr($descriptionSpecies, 0, 150) . '...';
                                                } else {
                                                    $limitedDescription = $descriptionSpecies;
                                                }
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>$FamilyNameE</td>";
                                                echo "<td>
                                            <img width='100'height='100' src='../admin/uploads/{$ani['imageSpecies']}'>
                                            </td>";
                                                echo "<td>{$ani['SpeciesNameE']}</td>";
                                                echo "<td>{$ani['SpeciesNameTV']}</td>";
                                                echo "<td>{$limitedDescription}</td>";
                                                echo "<td><a href='?request=edit-species&id={$ani['SpeciesID']}' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i> Update</a>";

                                                echo "<td><a href='?request=delete-species&id={$ani['SpeciesID']}' class='btn btn-danger' onclick=\"return confirm('Are you sure?')\"><i class='fa-solid fa-trash'></i> Delete</a>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                            
                            <?php endif;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>