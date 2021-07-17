<?php
include 'config.php'
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeGeek</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
        }

        .navbar {
            background-color: grey;
            position: relative;
            padding: 0px;
            border: 1px solid rgba(0, 0, 0, 0.13);

        }

        .navbar-brand {
            opacity: 1.0;
            text-align: center;
            position: absolute;
            left: 50%;
            margin-left: -50px !important;
            /* 50% of your logo width */
        }

        .con {
            background-color: white;
            height: 95vh;
            width: 100%;
            border-radius: 5px;
            border-radius: 4px;
        }

        .imag {
            background-image: url('images/Laptop.jpg');
            background-repeat: no-repeat;
            background-size: 645.6px 809.4px;
            height: 95vh;
            width: 49%;
            box-sizing: border-box;
            display: inline-block;
        }

        .content {
            display: inline-block;
            padding: 20px;
            height: 95vh;
            width: 50%;
            background-color: white;
            vertical-align: top;
            box-sizing: border-box;
            text-align: center;
        }

        .form-detail {
            padding: 30px 40px;
            position: relative;
            width: 100%;
        }

        .form-detail h2 {
            color: #333;
            font-size: 35px;
            text-align: center;
            position: relative;
            padding: 6px 0px 0px;
            margin-bottom: 47px;
        }

        .form-row {
            width: 100%;
        }

        .form-detail .form-row-last {
            text-align: left;
        }

        .form-detail .input-text {
            margin-bottom: 35px;
        }

        .form-detail input {
            width: 92%;
            padding: 0px 15px 10px 15px;
            border: 2px solid transparent;
            border-bottom: 2px solid #e5e5e5;
        }

        .form-detail .form-row input:focus {
            border-bottom: 2px solid #fe892a;
        }

        .form-detail .register {
            background: #696969;
            border-radius: 6px;
            width: 160px;
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            border: none;
            margin: 11px 0 50px 0px;
            cursor: pointer;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }

        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 0.9rem;
            /* Footer height */
        }

        .styling {
            padding: 0;
            background-color: grey;
            color: #fff;
            bottom: 0;
            font-size: 10px;
            height: 20px;
        }
                /* Responsive */
        @media screen and (max-width: 991px) {
            .con {
                margin: 180px 20px;
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .con .imag {
                width: 100%;
            }
            .con .imag img {
                width: 100%;
                border-bottom-left-radius: 0px;
                border-top-right-radius: 8px;
            }
            .con .form-detail {
                padding: 30px 20px 30px 20px;
                width: auto;
            }
            .con .form-detail .form-row input {
                width: 96%;
            }
            .con .form-detail .register {
                margin-bottom: 80px;
            }
        }
        @media screen and (max-width: 767px) {
            .con .form-detail .form-row input {
                width: 94%;
            }
        }

        @media screen and (max-width: 575px) {
            .con .form-detail .form-row input {
                width: 89%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-faded">
        <a class="navbar-brand " text-align="center" href="#"><img src="images/Learn.png" alt="Learncpp" height="45"
                width="200"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.php"><button class="btn btn-danger btn-sm active">Sign
                            up</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="con">
        <div class='imag'></div>
        <div class="content">
            <form class="form-detail" action="login.php" method="post">
                 <?php include('errors.php'); ?>
                <h1>Welcome</h1>
                <h2>Log In</h2>
                <div class="form-row">
                    <input type="text" name="username" id="username" class="input-text" placeholder="Username"
                        value="<?php echo $username; ?>">
                </div>
                <div class="form-row">
                    <input type="password" name="password" id="password" class="input-text" placeholder="Password"
                        required>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="login_user" class="register" value="Log in">
                </div>
            </form>
        </div>
    </div>
    <footer id="footer" class="styling">
        <div class="container">
            <center>
                <p>
                    Copyright &copy CodeGeek. All Rights Reserved | Contact Us: +91 90000 00000
                </p>
            </center>
        </div>
    </footer>
</body>

</html>