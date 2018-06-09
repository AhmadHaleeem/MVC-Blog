<div class="container" style="margin-top: 40px">
    <div class="">
        <h2 class="text-uppercase text-black-50 mb-4">Article List</h2>
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
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                foreach ($allPosts as $post) {
                $i++;
            ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $post['title']; ?></td>
                <td>
                    <?php
                        $postContent = $post['content'];
                        if (strlen($postContent) > 80) {
                            echo substr($postContent, 0, 50);
                        } else {
                            echo $post['content'];
                        }
                    ?>
                </td>
                <td>
                    <?php
                    foreach ($allCats as $cat) {
                            if ($cat['id'] == $post['cat']) {
                                echo $cat['name'];
                            }
                        }
                    ?>
                </td>
                <?php if (Session::get('level') == 1) { ?>
                <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL ?>/AdminController/editArticle/<?php echo $post['id']; ?>">Edit</a>
                    <a onclick="return confirm('Are Your Sure?');" class="btn btn-danger btn-sm" href="<?php echo BASE_URL ?>/AdminController/deleteArticle/<?php echo $post['id']; ?>">Delete</a>
                </td>
                <?php } else { echo '<td><span class="btn btn-info btn-sm">Not Permitted</span></td>'; } ?>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

