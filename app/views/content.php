
<div class="container">
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <?php
            foreach ($allPosts as $allPost) {
            ?>
            <div class="blog-post">
                <a href="<?php echo BASE_URL; ?>/IndexController/postDetails/<?php echo $allPost['id']; ?>"><h2 class="blog-post-title"><?php echo  ucfirst(strtolower($allPost['title'])); ?></h2></a>
                <p>
                    <?php
                    $text = $allPost['content'];
                    if (strlen($text) > 250) {
                        $text = substr($text, 0 , 250);
                        echo $text;
                    } else {
                        echo $allPost['content'];
                    }
                    ?>
                </p>
                <a href="<?php echo BASE_URL; ?>/IndexController/postDetails/<?php echo $allPost['id']; ?>">Read More</a>
            </div><!-- /.blog-post -->
            <hr>
            <?php } ?>




            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->






