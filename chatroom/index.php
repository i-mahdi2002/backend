<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/bootstrap2.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        
        .form-signin {
            max-width: 400px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;

            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="number"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .s {
            padding: 50px;
            border: solid red 1px;
            margin: 200px auto;
            width: 500px;
            height: 500px;
        }

        a {
            text-decoration: none;

        }

        .uploadBox {
            background-color: aqua;
            padding: 8px;
        }

        .icon {
            cursor: pointer;
            -moz-user-select: none;
            width: 120px;
            height: 103px;
            overflow: hidden;
            cursor: pointer;
            z-index: 0;
            float: left;
            border-radius: 10px;
        }

        .icon:hover {
            background-color: #94d9ff;
        }

        .iconImageFolder {
            background: transparent url("images/folder_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }

        .iconImageFile {
            background: transparent url("images/file_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }

        .iconParent {
            background: transparent url("images/parent_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }

        .iconNewFolder {
            background: transparent url("images/newFolder_icon.png") repeat scroll 0% 0%;
            width: 73px;
            height: 73px;
            margin: 0px auto;
            text-align: center;
        }

        .iconTitle {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 13px;
            color: #000;
            text-align: center;
            margin: 0px auto;
            max-width: 120px;
            max-height: 30px;
            overflow: hidden;
        }

        .iconRemove {
            float: left;
            background: transparent url("images/remove_icon.png") repeat scroll 0% 0%;
            width: 15px;
            height: 15px;
            margin: 0px auto;
            text-align: center;
            margin-left: 27px;

        }

        .iconRename {
            float: left;
            background: transparent url("images/rename_icon.png") repeat scroll 0% 0%;
            width: 15px;
            height: 15px;
            margin: 0px auto;
            text-align: center;
            margin-left: 5px;
        }

        .img {
            margin: 10px 30px;
        }

        .mahdi {
            margin: 80px auto;
            border-radius: 20px;
        }

        .h {
            height: 50px;
        }


        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }


    </style>
</head>

<body>
    <main class="mahdi form-signin w-100 bg-white ">
        <form action="chatroom.php" method="get" class="form-signin">
            <img class="img" src="images/039b004617d1ef43cf1769aae45d6ea2.png" alt="a" width="250">
            <br>
            <br>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name" required>
                <label for="floatingInput">User name</label>
            </div>
            <div class="form-floating">
                <input type="number" name="number" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Number</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="rememberMe" value="rememberMe"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-primary h" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>

</body>

</html>