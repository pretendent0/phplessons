<?php
include 'functions.php'; ?>

<?php
if(isset($_POST['submit'])){
    UpdateTable();
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">UPDATE</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showdata();
                        ?>
                    </select>
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                <a href="index.php">HOME</a>

            </form>

        </div>


    </div>

    </body>
    </html>

<?php
