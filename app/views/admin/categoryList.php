<div class="container" style="margin-top: 40px">
    <div class="col-md-9 offset-md-3">
        <h2 class="text-uppercase text-black-50 mb-4">Category List</h2>
        <table class="table">
            <?php
                if (!empty($_GET['msg'])) {
                    $msg = unserialize(urldecode($_GET['msg']));
                    foreach ($msg as $value) {
                        echo $value;
                    }
                }

            ?>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                foreach ($allCats as $allCat) {
                $i++;
            ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $allCat['name']; ?></td>
                <td><?php echo $allCat['title']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL ?>/AdminController/editCategory/<?php echo $allCat['id']; ?>">Edit</a>
                    <a onclick="return confirm('Are Your Sure?');" class="btn btn-danger btn-sm" href="<?php echo BASE_URL ?>/AdminController/deleteCategory/<?php echo $allCat['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

