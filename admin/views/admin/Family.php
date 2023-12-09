<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Family List</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Family</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Family List</h4>
                        <a href="?request=add-family" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Family New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>FamilyNameE</th>
                                                <th>FamilyNameTV</th>
                                                <th>imagesFamyli</th>
                                                <th>DescriptionFamily</th>
                                                <th>OrdoID</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($family_name->num_rows > 0) {
                                                while ($row = $family_name->fetch_assoc()) {
                                                    $OrdoID = $row["OrdoID"];
                                                    $OrdoNameE = $row["OrdoNameE"];
                                                    $ordo_data[$OrdoID] = $OrdoNameE;
                                                }
                                            }
                                            $i = 1;
                                            foreach ($family as $ani) {
                                                $OrdoID = $ani["OrdoID"];
                                                $OrdoNameE = isset($ordo_data[$OrdoID]) ? $ordo_data[$OrdoID] : '';
                                                $descriptionFamily = $ani['DescriptionFamily'];

                                                if (strlen($descriptionFamily) > 150) {
                                                    $limitedDescription = substr($descriptionFamily, 0, 150) . '...';
                                                } else {
                                                    $limitedDescription = $descriptionFamily;
                                                }
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>{$ani['FamilyNameE']}</td>";
                                                echo "<td>{$ani['FamilyNameTV']}</td>";
                                                echo "<td>
                                                <img width='100' height='100'  src='../admin/uploads/{$ani['imagesFamyli']}'>
                                            </td>";
                                                echo "<td>{$limitedDescription}</td>";
                                                echo "<td>$OrdoNameE</td>";
                                                echo "<td><a href='?request=edit-family&id={$ani['FamilyID']}' class='btn btn-primary p-2 mb-1'><i class='fa-regular fa-pen-to-square'></i> Update</a>";
                                                echo "<td><a href='?request=delete-family&id={$ani['FamilyID']}' class='btn btn-danger p-2' onclick=\"return confirm('Are you sure???')\"><i class='fa-solid fa-trash'></i> Delete</a>";
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