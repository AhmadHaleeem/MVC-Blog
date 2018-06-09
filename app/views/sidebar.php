    <aside class="col-md-4 blog-sidebar">

        <div class="p-3">
            <h4 class="font-italic">Category</h4>
            <ol class="list-unstyled mb-0">
                <?php
                    foreach ($allCats as $cat) {
                ?>
                <li style="font-size: 20px;">
                    <a href="<?php echo BASE_URL; ?>/IndexController/postByCat/<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a>
                </li>
                <?php } ?>
            </ol>
        </div>

        <div class="p-3">
            <h4 class="font-italic">Last Post</h4>
            <ol class="list-unstyled">
                <?php
                foreach ($latestPosts as $allPost) {
                ?>
                    <li style="font-size: 20px;">
                        <a href="<?php echo BASE_URL; ?>/IndexController/postDetails/<?php echo $allPost['id']; ?>"><?php echo ucfirst(strtolower($allPost['title'])); ?></a>

                    </li>

                <?php } ?>
            </ol>
        </div>
    </aside><!-- /.blog-sidebar -->
</div><!-- /.row -->

</main><!-- /.container -->