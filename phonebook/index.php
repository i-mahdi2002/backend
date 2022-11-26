<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div  style="margin-top: 100px" class="top-100 alert alert-primary bg-light" role="">
                <div class="">

                </div>
                <div class="">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#newUser-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">new User</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">list</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="serch-tab" data-bs-toggle="tab" data-bs-target="#serch-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">serch</button>
                        </li>
                    <ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active " id="newUser-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <br>
                        <form action="bace/save.php" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">first Name</label>
                                <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1" required placeholder="first Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">last Name</label>
                                <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1" placeholder="last Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">phone Number</label>
                                <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput1" required placeholder="09...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">group Name</label></div>
                            <select class="form-select" name="groupName" aria-label="Default select example">
                                <option  selected>Open this select menu</option>
                                <option value="family">family</option>
                                <option value="friend">friend</option>
                                <option value="work">work</option>
                            </select>
                            <br>
                            <button type="submit" style="width:200px" class="btn btn-outline-primary">save</button>
                            <button type="reset" style="width:100px" class="btn btn-outline-warning">reset</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <br>
                            <?php include_once "bace/list.php"?>

                    </div>
                    <div class="tab-pane fade" id="serch-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <br>
                        <form action="bace/doserch.php" method="post">
                            <input type="text" name="serch" class="form-control" id="exampleFormControlInput1" placeholder="first Name, last Name, phone Number" required>
                            <br>
                            <button style="width:100px" class="btn btn-outline-primary">serch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>
