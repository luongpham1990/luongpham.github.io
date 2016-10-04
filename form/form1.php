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
        .panel{
            margin: 50px auto;
            width: 500px;
        }

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
                        <h2 class="panel-title">
                            Form nhe
                        </h2>
                    </div>
                    <div class="panel-body">
                        <form action="">
                            <div class="form-group">
                                <label for="username">Username *</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" minlength="6"
                                       maxlength="15" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="fullname">Họ và tên *</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Họ và tên" required>
                            </div>
                            <div class="form-group">
                                <label for="ngaysinh">Ngày sinh *</label>
                                <input type="date" class="form-control" id="ngaysinh" placeholder="Ngày sinh" required>
                            </div>
                            <div class="form-group">
                                <label for="gioitinh">Giới tính *</label>
                                <select name="gioitinh" id="gioitinh" required>
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ </label>
                                <input type="text" class="form-control" id="address" placeholder="address">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
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