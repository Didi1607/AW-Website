<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Learn Science List</span>
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
                        <h4 class="card-title">Learn Science List</h4>
                        <a href="?request=add_learnScience" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Learn Science New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>DesScience</th>
                                                <th>VideoScience</th>
                                                <th>ScienceImage</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            $j = 0;
                                            foreach ($learnScience as $item) :
                                                $j++;
                                            ?>
                                                <tr>
                                                    <td><?= $j ?></td>

                                                    <td>
                                                        <?= $item['DesScience'] ?>
                                                    </td>
                                                    <td>
                                                        <video width='200' height='150' controls>
                                                            <source src='<?= $item['LinkScience'] ?>' type='video/mp4'>
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </td>
                                                    <td>
                                                        <img src="<?= $item['ScienceImage'] ?>" alt="" width="200px">
                                                    </td>

                                                    <td>
                                                        <a href="?request=edit_learnScience&id=<?= $item['id'] ?>" class="btn btn-primary"><i class='fa-regular fa-pen-to-square'></i>
                                                            Edit</a>
                                                      
                                                    </td>
                                                    <td>
                                                     
                                                        <a href="?request=delete-learnScience&id=<?= $item['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class='fa-solid fa-trash'></i>
                                                            Delete</a>
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