<?php
class phoneBook_view_save
{
    public $result_save;
    public function saver()
    {

?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div style="margin-top: 100px" class="position-relative bg-light alert alert-primary">
                        <?php
                             echo $this->result_save;
                        ?>

                        <a style="width:100px" class="btn btn-outline-info" href="index.php">return</a>
                    </div>
                </div>
            </div>
            <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            <script src="assets/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

        </body>

        </html>
<?php
    }
}
?>