<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Add Category</h1>

    <form method="POST" action="http://localhost/php_projects/MVC/CategoryController/insertCategory" style="margin-top: 60px; border:  1px solid #ccc; padding: 40px">
        <div style="margin-bottom: 20px">
            <?php
                if (isset($msg)) {
                    echo $msg;
                }
            ?>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Add Category name" >
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="title" placeholder="Add Category title" >
        </div>
        <input type="submit" value="Save" name="submit" class="btn btn-primary btn-block text-white">
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>