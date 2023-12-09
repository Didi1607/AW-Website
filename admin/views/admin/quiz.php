<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Quiz List</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
      

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Quiz List</h4>
                        <a href="?request=add-quiz" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Quiz New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($user as $item) :
                                if ($item['role'] == 3) : ?>
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>imageQuiz</th>
                                                <th>AskA</th>
                                                <th>AskB</th>
                                                <th>AskC</th>
                                                <th>AskD</th>
                                                <th>Ans</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000;">
                                            <?php
                                            $j = 0;
                                            foreach ($quiz as $item) :
                                                $j++;
                                            ?>
                                                <tr>
                                                    <td><?= $j ?></td>

                                                    <td>
                                                        <img src="../admin/uploads/<?= $item['imageQuiz'] ?>" alt="" width="100px" >
                                                    </td>
                                                    <td>
                                                        <?= $item['AskA'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['AskB'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['AskC'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['AskD'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['Ans'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="?request=edit-quiz&id=<?= $item['IdQuiz'] ?>" class="btn btn-primary"><i class='fa-regular fa-pen-to-square'></i>
                                                            Edit</a>

                                                    </td>
                                                    <td>
                                                        <a href="?request=delete-quiz&id=<?= $item['IdQuiz'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class='fa-solid fa-trash'></i>
                                                            Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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