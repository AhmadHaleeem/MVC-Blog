<div class="container">
    <div class="col-md-8 offset-3 mt-5">
        <form method="POST" action="<?php echo BASE_URL; ?>/AdminController/changeUi" >
            <h2 class="text-uppercase text-black-50 mb-4">Add new user</h2>
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
                <input type="color" class="form-control" name="color">
            </div>

            <input type="submit" value="Save option" name="submit" class="btn btn-info text-white">
        </form>
    </div>
</div>
