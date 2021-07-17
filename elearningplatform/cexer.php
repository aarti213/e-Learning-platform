<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<html>
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
                    line-height: 1.5;
                    display: block;
                    width: 100%;
                }
                .container{
                    box-shadow: 10px 5px 10px 5px grey;
                }
                .navbar {
                    height: 49px;
                    background-color: grey;
                    position: sticky;
                    padding: 0px;
                    border: 1px solid rgba(0, 0, 0, 0.13);
                    width: 100%;

                }

                .navbar-nav {
                    padding-right: 27px;
                }

                .navbar-brand {
                    opacity: 1.0;
                    text-align: center;
                    position: absolute;
                    left: 50%;
                    margin-left: -50px !important;
                }
                .dropbtn {
                    background-color: #ffffff;
                    color: black;
                    margin-top: 0px;
                    padding: 6px 10px;
                    font-size: 16px;
                    border: none;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 100px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 8px 5px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    background-color: #696969;
                }

                a {
                    color: black;
                    text-decoration: none;
                    display: inline-block;
                    padding: 8px 16px;
                }
                a:hover {
                    background-color: #ddd;
                    color: black;
                }
                p {
                    text-align: left;
                    color: blue;
                }
                .ques{
                    background-color: whitesmoke;
                    border: 2px solid grey;
                    padding: 20px 20px;
                }
                .code {
                    width: 90%;
                    margin: auto;
                    height:500px;
                    overflow: scroll;
                }
                #footer {
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                    height: 0.9rem;
                    text-align: center;
                }

                .styling {
                    text-align: center;
                    padding: 0;
                    background-color: grey;
                    color: #fff;
                    bottom: 0;
                    font-size: 10px;
                    height: 20px;
                }
            </style>
        </head>

        <body>
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand " text-align="center" href="index.php"><img src="images/Learn.png" alt="Learncpp" height="45"
                                                                                   width="200"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php if (isset($_SESSION['username'])) : ?>
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <?php echo $_SESSION['username']; ?>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="index.php?logout='1'">Log out</a>
                                    </div>
                                </div>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
            </nav>
            <div style="text-align:center; margin-top: 10px; margin-bottom: 20px;"><h1>Coding Ground</h1></div>
            <div class="container">
                <div class="ques">
                    <h1> Problem Statement 1</h1>
                    <p><span style="font-size:18px">In the function <strong>helloWorld()</strong>, output a line&nbsp;"<strong>Hello
                                World</strong>" (without quotes).</span></p>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mf6"></div>
                </div>

                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 2</h1>
                    <span style="font-size:18px"><strong>Your Task:&nbsp;&nbsp;</strong><br>
                        <p>You don't need to read input or print anything. Your task is to complete the function
                            <strong>largest()</strong>&nbsp;which takes the array <strong>A[]</strong> and its size <strong>n&nbsp;</strong>as
                            inputs and returns the maximum element in the array.</span></p>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfv"></div>
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 3</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p>C++ program to display a string entered by user.</p>
                    </span>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mft"></div>     
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 4</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p>C++ Program to assign data to members of a structure variable and display it.</p>
                        <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfw"></div>  
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 5</h1>
                    <span style="fontsize:29px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p>Create object and class in c++ programming.</p>
                    </span>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfx"></div>
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 6</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p>Default constructor in c++.</p>
                        <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfA"></div>  
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 7</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p> Operator (Unary Operator) Overloading in c++.</p>
                        <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfC"></div>
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 8</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p>Printing Variable Addresses in c++.</p>
                    </span>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfG"></div>
                </div>


                <hr><br>

                <div class="ques">
                    <h1> Problem Statement 9</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                        <p> Working of friend Function
                            c++.</p>
                    </span>
                    <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3mfH"></div>
                </div>

                <hr><br>

                <div class="code" class="ques">    
                    <h1> Problem Statement 10</h1>
                    <span style="font-size:18px">
                        <strong>Your Task:&nbsp;&nbsp;</strong>
                    </span>
                    <p>Program to display largest among two numbers using function templates.</p>
                    <div data-pym-src="https://www.jdoodle.com/embed/v0/3mfO"></div>
                </div>

                <script src="http://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript">
                </script>
            </div>

            <footer id="footer" class="styling">
                <div class="container">
                    Copyright &copy CodeGeek. All Rights Reserved | Contact Us: +91 90000 00000
                </div>
            </footer>
        </body>

    </html>