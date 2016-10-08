<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
        body {
            background: whitesmoke;
            box-sizing: border-box;
        }

        .panel {
            margin: 50px auto;
            width: 500px;
        }

        .account_type {
            margin-right: 10px;

    </style>
</head>
<body>
<section class="nav">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h2 class="panel-title" style="text-align: center">
                            Form Login
                        </h2>
                    </div>
                    <div class="description">
                        <?php
                        $user = [
                            'name' => 'luongpham',
                            'email' => 'luongpham1990@gmail.com',
                            'username' => 'luongpham',
                            'pass' => '123456',
                            'repass' => '123456',
                            'birthday' => '1990-07-01',
                            'gender' => '1',
                            'account' => '4',
                            'phone' => '987654321',
                        ]
                        ?>
                    </div>
                    <?php if (!empty($_POST)): ?>
                        <?php
                        echo "<pre>";
                        var_dump($_POST);
                        var_dump($user);
                        echo "</pre>";
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $username = $_POST["username"];
                        $pass = $_POST["pass"];
                        $repass = $_POST["repass"];
                        $birthday = $_POST["birthday"];
                        $gender = $_POST["gender"];
                        $account = $_POST["account"];
                        $phone = $_POST["phone"];

                        if ($user["name"] == $name
                            && $user["email"] == $email
                            && $user["username"] == $username
                            && $user["pass"] == $pass
                            && $user["repass"] == $repass
                            && $user["birthday"] == $birthday
                            && $user["gender"] == $gender
                            && $user["account"] == $account
                            && $user["phone"] == $phone
                        ) {
                            echo "<h1>Wellcome <strong>$username</strong> to tiên giới</h1>";
                        } else {
                            echo "<h1>Xịt rồi nhé</h1>";
                        }
                        ?>
                    <?php else: ?>
                        <div class="panel-body">
                            <form action="" method="post" role="form" class="form-group">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="First and last name" minlength="6"
                                           maxlength="15" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" class="form-control" name="username" id="username"
                                           placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password </label>
                                    <input type="password" class="form-control" name="pass" id="pass"
                                           placeholder="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="repass">Re Password </label>
                                    <input type="password" class="form-control" name="repass" id="repass"
                                           placeholder="re-password" required>
                                </div>
                                <div class="form-group">
                                    <label for="birthday">Ngày sinh </label>
                                    <input type="date" class="form-control" name="birthday" id="birthday"
                                           placeholder="Ngày sinh" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Giới tính </label>
                                    <select name="gender" id="gender" required>
                                        <option name="gender" value="1">Nam</option>
                                        <option name="gender" value="2">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="">Account Type</label> <br>
                                    <label class="radio-inline">
                                        <input name="account" type="radio" value="1" checked> Free
                                    </label>
                                    <label class="radio-inline">
                                        <input name="account" type="radio" value="2">Vip 1
                                    </label>
                                    <label class="radio-inline">
                                        <input name="account" type="radio" value="3">Vip 2
                                    </label>
                                    <label class="radio-inline">
                                        <input name="account" type="radio" value="4">Vip 3
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="address">Phone </label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 Luong Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="#">Luong</a></span></p>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</html>