<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Ordo List</span>
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
                        <h4 class="card-title">Ordo List</h4>
                        <a href="?request=add_ordo" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Ordo New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>OrdoNameE</th>
                                                <th>ClassID</th>
                                                <th>OrdoNameTV</th>
                                                <th>DescriptionOrdo</th>
                                                <th>ImageOrdo</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($knowledgebase_name_ordo->num_rows > 0) {
                                                while ($row = $knowledgebase_name_ordo->fetch_assoc()) {
                                                    $ClassID = $row["ClassID"];
                                                    $ClassNameE = $row["ClassNameE"];
                                                    $ordo_data[$ClassID] = $ClassNameE;
                                                }
                                            }
                                            $i = 1;
                                            foreach ($ordo as $ani) {
                                                $ClassID = $ani["ClassID"];
                                                $ClassNameE = isset($ordo_data[$ClassID]) ? $ordo_data[$ClassID] : '';

                                                $descriptionOrdo = $ani['DescriptionOrdo'];

                                                if (strlen($descriptionOrdo) > 180) {
                                                    $limitedDescription = substr($descriptionOrdo, 0, 180) . '...';
                                                } else {
                                                    $limitedDescription = $descriptionOrdo;
                                                }

                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>{$ani['OrdoNameE']}</td>";
                                                echo "<td>$ClassNameE</td>";
                                                echo "<td>{$ani['OrdoNameTV']}</td>";
                                                echo "<td>$limitedDescription</td>";
                                                echo "<td><img src='../admin/uploads/images/{$ani['ImageOrdo']}' alt='' width='100px'></td>";
                                                echo "<td><a href='?request=edit_ordo&id={$ani['OrdoID']}' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i> Update</a>";
                                                echo "<td><a href='?request=delete_ordo&id={$ani['OrdoID']}' class='btn btn-danger' onclick=\"return confirm('Are you sure?')\"><i class='fa-solid fa-trash'></i> Delete</a></td>";
                                                echo "</td></tr>";
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