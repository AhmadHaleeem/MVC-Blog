<div class="container" style="margin-top: 40px">
    <div class="">
        <h2 class="text-uppercase text-black-50 mb-4">User List</h2>
        <table id="myTable"  class="table">
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
                <th scope="col">Username</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                foreach ($allUsers as $user) {
                $i++;
            ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $user['username']; ?></td>

                <td>
                    <?php
                        if ($user['level'] == 1) {
                            echo 'Admin';
                        } elseif ($user['level'] == 2) {
                            echo 'Author';
                        } elseif($user['level'] == 3) {
                            echo 'contributor';
                        }
                    ?>
                </td>
                <td>
                    <a onclick="return confirm('Are Your Sure?');" class="btn btn-danger btn-sm" href="<?php echo BASE_URL ?>/UserController/deleteUser/<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

