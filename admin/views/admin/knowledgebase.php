<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">KnowLedgeBase List</span>
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
                        <h4 class="card-title">KnowLedgeBase List</h4>
                        <a href="?request=add_knowledgebase" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add KnowLedgeBase New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>IdClass</th>
                                                <th>IdOrdo</th>
                                                <th>IdFamily</th>
                                                <th>Title</th>
                                                <th>KnowledgeBaseDescription</th>
                                                <th>KnowledgeBaseVideo</th>
                                                <th>KnowledgeBaseReference</th>
                                                <th>KnowledgeBaseImage</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            if ($knowledgebase_name_class->num_rows > 0) {
                                                while ($row = $knowledgebase_name_class->fetch_assoc()) {
                                                    $IdClass = $row["IdClass"];
                                                    $ClassNameE = $row["ClassNameE"];
                                                    $ordo_data[$IdClass] = $ClassNameE;
                                                }
                                            }
                                            if ($favorite_name_ordo->num_rows > 0) {
                                                while ($row = $favorite_name_ordo->fetch_assoc()) {
                                                    $IdOrdo = $row["IdOrdo"];
                                                    $OrdoNameE = $row["OrdoNameE"];
                                                    $ordo_data[$IdOrdo] = $OrdoNameE;
                                                }
                                            }

                                            if ($favorite_name_family->num_rows > 0) {
                                                while ($row = $favorite_name_family->fetch_assoc()) {
                                                    $IdFamily = $row["IdFamily"];
                                                    $FamilyNameE = $row["FamilyNameE"];
                                                    $ordo_data[$IdFamily] = $FamilyNameE;
                                                }
                                            }

                                            $i = 1;
                                            foreach ($knowledgebase as $ani) {
                                                $IdClass = $ani["IdClass"];
                                                $ClassNameE = isset($ordo_data[$IdClass]) ? $ordo_data[$IdClass] : '';
                                                $IdOrdo = $ani["IdOrdo"];
                                                $IdOrdoname = isset($ordo_data[$IdOrdo]) ? $ordo_data[$IdOrdo] : '';
                                                $IdFamily = $ani["IdFamily"];
                                                $IdFamilyname = isset($ordo_data[$IdFamily]) ? $ordo_data[$IdFamily] : '';
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>$ClassNameE</td>";
                                                echo "<td>$IdOrdoname</td>";
                                                echo "<td>$IdFamilyname</td>";
                                                echo "<td>{$ani['Title']}</td>";
                                                echo "<td>{$ani['KnowledgeBaseDescription']}</td>";
                                                echo "<td>
                                                <video width='150' height='150' controls>
                                                    <source src='../admin/uploads/videos/{$ani['KnowledgeBaseVideo']}' type='video/mp4'>
                                                    Your browser does not support the video tag.
                                                </video>
                                            </td>";
                                                echo "<td> <img src='../admin/uploads/images/{$ani['KnowledgeBaseImage']}' alt='' width='100' height='100'></td>";
                                                echo "<td>{$ani['KnowledgeBaseReference']}</td>";
                                                echo "<td><a href='?request=edit_knowledgebase&id={$ani['id_kn']}' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i> Update</a>";

                                                echo "<td><a href='?request=delete_knowledgebase&id={$ani['id_kn']}' class='btn btn-danger' onclick=\"return confirm('Are you sure???')\"><i class='fa-solid fa-trash'></i> Delete</a>";
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