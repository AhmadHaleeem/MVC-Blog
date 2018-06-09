<div class="container">
    <div class="col-md-8 offset-3 mt-5">
        <?php foreach ($postByID as $value) { ?>
        <form method="POST" action="<?php echo BASE_URL; ?>/AdminController/updatePost/<?php echo $value['id']; ?>" >
            <h2 class="text-uppercase text-black-50 mb-4">Edit article</h2>
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
                <input type="text" class="form-control" name="title" placeholder="Add Post title" value="<?php echo $value['title']; ?>">
            </div>
            <div class="form-group mb-3">
                <textarea id="contentID" cols="4" rows="4" class="form-control" name="content" placeholder="Add Post content" ><?php echo $value['content']; ?></textarea>
            </div>
            <div class="form-group mb-3">
                <select class="form-control" name="category">
                    <option value="">Choose Category</option>
                    <?php foreach ($allCats as $cat) {
                        if ($cat['id'] == $value['cat']) { ?>
                            <option value="<?php echo $cat['id']; ?>" selected><?php echo $cat['name']; ?></option>
                      <?php  }
                    ?>
                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Update Article" name="submit" class="btn btn-primary text-white">

        </form>
        <?php } ?>
    </div>
</div>
