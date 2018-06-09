<div class="container">
    <div class="col-md-8 offset-3 mt-5">
        <form method="POST" action="<?php echo BASE_URL; ?>/AdminController/insertCategory" >
            <h1>Add Category</h1>
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
                <input type="text" class="form-control" name="name" placeholder="Add Category name" >
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="title" placeholder="Add Category title" >
            </div>
            <input type="submit" value="Save" name="submit" class="btn btn-info  text-white">
        </form>
    </div>
</div>
