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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: grey;
            height: 100vh;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.356);
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

        svg {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .container {
            display: inline-block;
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            vertical-align: middle;
            overflow: hidden;
        }
        .responsive{
            display: flex;
            flex-wrap: wrap;
        }
        .dis {
            background-image: url('images/Crop2.jpg');
            background-size: 50vw 55vh;
            border-radius: 10px;
            width: 50vw;
            height: 55vh;
            background-repeat: no-repeat;
            display: inline-block;
            z-index: 10;
        }

        .text {
            font-family: 'Pattaya', sans-serif;
            font-size: 30px;
            color: ivory;
            width: 45vw;
            height: 50vh;
            vertical-align: top;
            padding-top: 20vh;
            padding-left: 10px;
            text-align: left;
            box-sizing: border-box;
            z-index: 2;
        }

        .button {
            border-radius: 4px;
            background-color: #f4511e;
            background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 51%, #00d2ff 100%);
            border: none;
            border-radius: 12px;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 10px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            z-index: 2;
        }

        #second span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        #second span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        #second:hover span {
            padding-right: 25px;
        }

        #second:hover span:after {
            opacity: 1;
            right: 0;
        }
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 1.0rem;
            z-index: 2;
            /* Footer height */
        }

        .styling {
            padding: 0;
            background-color: rgba(0, 0, 0, 0.651);
            color: #fff;
            bottom: 0;
            font-size: 10px;
            height: 20px;
            text-align: center;
        }
        @media screen and (max-width: 991px){
            .responsive{
                align-content: center;
                align-items: center;
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .dis{
                width: 90%;
                background-size: 100% 100%;
                margin: auto;
            }
            .text{
                width: 80%;
                margin:auto;
                padding-top: 10px
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


    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 250" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none;fill:black"></path>
        </svg>
    </div>
    <div class="responsive">
    <div class="dis"></div>
    <div class="text">
        <p>
            Whether you want to uncover the secrets of the universe, or you want to pursue a career in the 21st century,
            basic computer programming is an essential skill to learn. </p>
        <a href="signup.php"><button class="button" id="second"><span>Get Started</span></button></a>
    </div>
    </div>
    <footer id="footer" class="styling">
        <div class="container">
            <p>
                Copyright &copy CodeGeek. All Rights Reserved | Contact Us: +91 90000 00000
            </p>
        </div>
    </footer>
</body>

</html>