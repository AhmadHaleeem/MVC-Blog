<div class="container">
    <div class="col-md-8 offset-3 mt-5">
        <form method="POST" action="<?php echo BASE_URL; ?>/UserController/addNewUser" >
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
                <input type="text" class="form-control" name="username" placeholder="Add Username" >
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Add Password" >
            </div>
            <div class="form-group mb-3">
                <select class="form-control" name="level">
                    <option>Select User Role</option>
                    <option value="2">Author</option>
                    <option value="3">Contributor</option>
                </select>
            </div>
            <input type="submit" value="Add user" name="submit" class="btn btn-info text-white">
        </form>
    </div>
</div>
