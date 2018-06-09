<div class="container">
    <div class="col-md-8 offset-3 mt-5">
        <?php foreach ($catById as $value) { ?>
        <form method="POST" action="<?php echo BASE_URL; ?>/AdminController/updateCat/<?php echo $value['id'];  ?>" >
            <h2 class="text-uppercase text-black-50 mb-4">Edit Category</h2>
            <div style="margin-bottom: 20px">
                <?php
                if (!empty($_GET['msg'])) {
                    $msg = unserialize(urldecode($_GET['msg']));
                    foreach ($msg as $value) {
                        echo $value;
                    }
                }
                ?>
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Add Category name" value="<?php echo $value['name']; ?>">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="title" placeholder="Add Category title" value="<?php echo $value['title']; ?>">
            </div>
            <input type="submit" value="Update" name="submit" class="btn btn-info  text-white">
            <?php } ?>
        </form>
    </div>
</div>
