<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo BASE_URL; ?>/inc/images/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>/inc/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/inc/css/blog.css" rel="stylesheet">
</head>

<body>


<div class="container"  >
    <div class="col-md-6 offset-3" style="margin-top: 100px;border: 1px solid #ccc; padding: 50px ">
        <h1 class="text-center" style="color: #ccc;margin-top: 10px;margin-bottom: 40px">Login Page</h1>
        <form method="post" action="<?php echo BASE_URL; ?>/LoginController/loginAuth">
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="Username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="<?php echo BASE_URL; ?>/inc/js/popper.min.js"></script>
<script src="<?php echo BASE_URL; ?>/inc/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>/inc/js/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
