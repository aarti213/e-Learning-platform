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

            .navbar {
                height: 49px;
                background-color: grey;
                position: sticky;
                padding: 0px;
                border: 1px solid rgba(0, 0, 0, 0.13);
                width: 100%;

            }

            .content::-webkit-scrollbar {
                width: 0px;
                /* width of the entire scrollbar */
            }

            .content::-webkit-scrollbar-track {
                background: grey;
                /* color of the tracking area */
            }

            .w3-sidebar {
                height: 100%;
                width: 200px;
                background-color: #fff;
                position: fixed !important;
                z-index: 1;
                overflow: auto;
                display: inline-block;
            }

            .navbar-brand {
                opacity: 1.0;
                text-align: center;
                position: absolute;
                left: 50%;
                margin-left: -50px !important;
                /* 50% of your logo width */
            }
            .navbar-nav{
                padding-right:27px;
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

            .leftmenuinnerinner {
                display: block;
            }

            a:hover {
                background-color: #ddd;
                color: black;
            }

            .nextprev {
                display: inline-block;
            }

            .previous {
                border-radius: 5px;
                background-color: grey;
                color: white;
                margin-top: 13px;
                margin-right: 45vw;
            }

            .next {
                border-radius: 5px;
                background-color: grey;
                color: white;
            }

            .round {
                border-radius: 50%;
            }


            .content {
                padding: 16px 40px 32px 32px;
                display: inline-block;
                background-color: whitesmoke;
                width: 70vw;
                min-height: 100%;
                margin-left: 200px;
                box-shadow: 10px 5px 10px 5px grey;
                overflow: auto;
                flex-wrap: wrap;
                -ms-overflow-style: none;
                /* IE and Edge */
            }



            h1 {
                padding-left: 20px;
                margin-top: 37px;
                font-size: 42px;
                text-align: left;
            }

            .sub {
                display: block;
            }

            h2 {
                font-size: 1.5rem;
            }

            p {
                text-align: left;
                margin: 30px;
            }

            .data {
                margin: auto;
                height: 42%;
                width: 70%;
            }

            video {
                height: 92%;
                width: 97%;
                box-sizing: border-box;
            }
            .code {
                width: 90%;
                margin: auto;
            }

            #footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                height: 0.9rem;
                text-align: center;
                /* Footer height */
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

            @media only screen and (max-width: 992px) {
                .previous{
                    margin-right: 36vw;
                }


            }

            @media only screen and (min-width: 768px) and (max-width: 991px) {
                .previous{
                    margin-right:34vw; 
                }
                .w3-sidebar{
                    width: 183px;
                    font-size: 15px;
                }
                .content{
                    margin-left:184px;
                }
            }

            @media only screen and (max-width: 767px) {
                .previous{
                    margin-right: 21vw;
                }
                .w3-sidebar{
                    width: 150px;
                    font-size: 14px;
                }
                .content{
                    margin-left:153px;
                }
            }

            @media only screen and (max-width: 580px) {
                .previous{
                    margin-right: 13vw;
                }
                .w3-sidebar{
                    width: 130px;
                    font-size: 13px;
                }
                .content{
                    margin-left:133px;
                }
            }

            @media only screen and (max-width: 480px) {
                .previous{
                    margin-right: auto;
                }
                .w3-sidebar{
                    width: 110px;
                    font-size: 11px;
                }
                .content{
                    margin-left:112px;
                }

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
        <div class="w3-sidebar w3-collapse" id="sidenav" style="top: 0px;">
            <div id="leftmenuinner" style="padding-top: 50px;">
                <div id="leftmenuinnerinner" style="background-color:#E7E9EB;">
                    <!-- <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a> -->
                    <h2 class="left"><span class="left_h2">C++</span> Tutorial</h2>
                    <a class="sub" target="_top" href="cintro1.php">C++ Intro</a>
                    <a class="sub" target="_top" href="csyntax2.php">C++ Syntax</a>
                    <a class="sub" target="_top" href="coutput3.php">C++ Input/Output</a>
                    <a class="sub" target="_top" href="coop4.phpl">C++ OOP</a>
                    <a class="sub" target="_top" href="cclasses5.php">C++ Classes/Objects</a>
                    <a class="sub" target="_top" href="#">C++ Strings</a>
                    <a class="sub" target="_top" href="#">C++ Array</a>
                    <a class="sub" target="_top" href="#">C++ Operators</a>
                    <a class="sub" target="_top" href="#">C++  Maths</a>
                    <a class="sub" target="_top" href="#">C++ OOP</a>
                    <br>
                    <h2>C++ Exercises</h2>
                    <a class="sub" target="_top" href="cexer.php">Exercises</a>
                    <br>
                    <h2>C++ Quiz Exam</h2>
                    <a class="sub" target="_top" href="cquiz.php">Quiz Exam</a>
                    <br><br><br>
                </div>
            </div>
        </div>
        <div class="content">
            <h1>C++ Syntax</h1>
            <div class="nextprev">
                <a href="cintro1.php" class="previous">&laquo; Previous</a>
                <a href="coutput3.php" class="next">Next &raquo;</a>
            </div>

            <br><br>
            <hr>
            <hr>
            <h2>C++ Syntax</h2>
            <p>Let's break up the following code to understand it better:</p>
            <h4>Example</h4>
            <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3m5e">
            </div>

            <h4>Example Explained</h4>
            <p><strong>Line 1:</strong> <code class="w3-codespan">#include &lt;iostream&gt;</code> is a 
                <strong>header file library</strong> that lets us work with input and output objects, such as 
                <code class="w3-codespan">cout</code> (used in line 5). Header files add functionality to C++ programs.</p>
            <p><strong>Line 2:</strong> <code class="w3-codespan">using namespace std</code> 
                means that we can use names for objects and variables from the 
                standard library.</p>
            <div class="w3-note w3-panel">
                <p>Don't worry if you don't understand how <code class="w3-codespan">#include &lt;iostream&gt;</code> and <code class="w3-codespan">using namespace std</code> works. Just think of it as something that (almost) always appears in your program.</p>
            </div>
            <p><strong>Line 3:</strong> A blank line. C++ ignores white space.</p>
            <p><strong>Line 4:</strong> Another thing that always appear in a C++ program, is <code class="w3-codespan">int main()</code>. This is called a 
                <strong>function</strong>. Any code inside its curly brackets <code class="w3-codespan">{}</code> will be executed.
            </p>
            <p><strong>Line 5:</strong> <code class="w3-codespan">cout</code> (pronounced "see-out") is an 
                <strong>object</strong> used together with the <em>insertion operator</em> (<code class="w3-codespan">&lt;&lt;</code>) 
                to output/print text. In our example it will output "Hello World".</p>
            <p><strong>Note:</strong> Every C++ statement ends with a semicolon <code class="w3-codespan">;</code>.</p>
            <p><strong>Note:</strong> The body of <code class="w3-codespan">int main()</code> could also been written as:<br>
                <code class="w3-codespan">int main () { cout &lt;&lt; "Hello World! ";  return 0; 
                    }</code></p>
            <p><strong>Remember:</strong> The compiler ignores white spaces. However, multiple lines makes the code more readable.</p>
            <p><strong>Line 6:</strong> <code class="w3-codespan">return 0</code> ends the main function.</p>
            <p><strong>Line 7:</strong> Do not forget to add the closing curly bracket <code class="w3-codespan">}</code> to actually end the 
                main function.</p>
            <hr>
            <h2>Omitting Namespace</h2>
            <p>You might see some C++ programs that runs without the standard namespace library. The <code class="w3-codespan">using namespace std</code> line can be omitted and replaced with the <code class="w3-codespan">std</code> keyword, 
                followed by the <code class="w3-codespan">::</code> operator 
                for some objects:</p>
            <h4>Example</h4>
            <div class="code" data-pym-src="https://www.jdoodle.com/embed/v0/3m5f">
            </div>



            <div class="nextprev">
                <a href="cintro1.php" class="previous">&laquo; Previous</a>
                <a href="coutput3.php" class="next">Next &raquo;</a>
            </div>
        </div>

        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript">
        </script>


        <footer id="footer" class="styling">
            <div class="container">
                Copyright &copy CodeGeek. All Rights Reserved | Contact Us: +91 90000 00000
            </div>
        </footer>
    </body>

</html>