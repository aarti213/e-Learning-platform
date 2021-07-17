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
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <meta content="description" name="description">
        <meta name="google" content="notranslate" />
        <meta content="Elearning quiz on C++" name="author">

        <meta name="msapplication-tap-highlight" content="no">


        <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
        <link href="./assets/favicon.ico" rel="icon">

        <link href="" rel="stylesheet">


        <title>C++ Quiz</title>

        <link href="main.550dcf66.css" rel="stylesheet">
        <style>
            body,html{
                font-family: 'Raleway', sans-serif;
                overflow: auto;
                background-color: white;
            }
            table,
            td,
            th {
                border: 1px solid #ddd;
                text-align: left;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                padding: 55px;
            }
            .navbar {
                height: 49px;
                background-color: grey;
                position: sticky;
                padding: 0px;
                border: 1px solid rgba(0, 0, 0, 0.13);
                width: 100%;

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

            .button {
                border: none;
                color: black;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .section-container{
                background-color: whitesmoke;
            }

            .button1 {
                background-color: white;
                color: black;
                border: 2px solid #008CBA;
            }

            .button:hover1 {
                background-color: #008CBA;
                color: white;
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
        </style>
    </head>

    <body>
        <!-- Add your content of header -->
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand " text-align="center" href="index.php"><img src="images/Learn.png" alt="Learncpp" height="45"
                                                                               width="200"></a>
            <button class="navbar-toggler" style="background-color: grey"type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="section-container">
            <div class="container"style="background-color: white;">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <h2 class="text-center">C++ Quiz</h2>
                        <link rel="stylesheet" href="style.css">

                        <div class="grid">
                            <div id="quiz">

                                <p>Choose The Correct Option</p>
                                <hr style="margin-bottom: 20px">

                                <p id="question"></p>

                                <div class="buttons">



                                    <button id="btn0"><span id="choice0"></span></button>
                                    <button id="btn1"><span id="choice1"></span></button>
                                    <button id="btn2"><span id="choice2"></span></button>
                                    <button id="btn3"><span id="choice3"></span></button>

                                </div>


                                <!--<div>
                                  <button class="button button1">
                                  <button id="btn0"><span id="choice0"></span></button>
                                  <button id="btn1"><span id="choice1"></span></button>
                                  <button id="btn2"><span id="choice2"></span></button>
                                  <button id="btn3"><span id="choice3"></span></button>
                                   </div>    -->



                                <hr style="margin-top: 50px">
                                <footer>
                                    <p id="progress">Question x of y</p>
                                </footer>
                            </div>
                        </div>


                        <script src="question.js"></script>
                        <script>
                            function Quiz(questions) {
                                this.score = 0;
                                this.questions = questions;
                                this.questionIndex = 0;
                            }

                            Quiz.prototype.getQuestionIndex = function () {
                                return this.questions[this.questionIndex];
                            }

                            Quiz.prototype.guess = function (answer) {
                                if (this.getQuestionIndex().isCorrectAnswer(answer)) {
                                    this.score++;
                                }

                                this.questionIndex++;
                            }

                            Quiz.prototype.isEnded = function () {
                                return this.questionIndex === this.questions.length;
                            }


                            function Question(text, choices, answer) {
                                this.text = text;
                                this.choices = choices;
                                this.answer = answer;
                            }

                            Question.prototype.isCorrectAnswer = function (choice) {
                                return this.answer === choice;
                            }


                            function populate() {
                                if (quiz.isEnded()) {
                                    showScores();
                                } else {
                                    // show question
                                    var element = document.getElementById("question");
                                    element.innerHTML = quiz.getQuestionIndex().text;

                                    // show options
                                    var choices = quiz.getQuestionIndex().choices;
                                    for (var i = 0; i < choices.length; i++) {
                                        var element = document.getElementById("choice" + i);
                                        element.innerHTML = choices[i];
                                        guess("btn" + i, choices[i]);
                                    }

                                    showProgress();
                                }
                            }
                            ;

                            function guess(id, guess) {
                                var button = document.getElementById(id);
                                button.onclick = function () {
                                    quiz.guess(guess);
                                    populate();
                                }
                            }
                            ;


                            function showProgress() {
                                var currentQuestionNumber = quiz.questionIndex + 1;
                                var element = document.getElementById("progress");
                                element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
                            }
                            ;

                            function showScores() {
                                var gameOverHTML = "<h3>Result</h3>";
                                gameOverHTML += "<h3 id='score'> Your scores: " + quiz.score + "</h3>";
                                var element = document.getElementById("quiz");
                                element.innerHTML = gameOverHTML;
                            }
                            ;

                            // create questions here
                            var questions = [
                                new Question("Which of the following is the correct syntax to add the header file in the C++ program?", ["#include<userdefined>", "#include userdefined.h", "<include> userdefined.h", "Both A and B"], "Both A and B"),
                                new Question("Which of the following is the correct syntax to print the message in C++ language?", ["cout <<Hello world!;", "Cout << Hello world! ;", "cout <<Hello world!; ", "None of the above"], "cout << Hello world!; "),
                                new Question("Which of the following is the correct identifier?", ["$var_name", "VAR_123", "varname@", "None of the above"], "VAR_123"),
                                new Question(" Which of the following features must be supported by any programming language to become a pure object-oriented programming language?", ["Encapsulation", "Inheritance", "Polymorphism", "All of the above"], "All of the above"),
                                new Question(" The programming language that has the ability to create new data types is called___.", ["Overloaded", "Encapsulated", "Reprehensible", "Extensible"], "Extensible"),
                                new Question("Which of the following is the original creator of the C++ language?", ["Dennis Ritchie", "Ken Thompson", "Bjarne Stroustrup", "Brian Kernighan"], "Bjarne Stroustrup"),
                                new Question("Which of the following statements is correct about the formal parameters in C++?", ["Parameters with which functions are called", "Parameters which are used in the definition of the function", "Variables other than passed parameters in a function", "Variables that are never used in the function"], "Parameters with which functions are called"),
                                new Question("The C++ language is ______ object-oriented language.", ["Pure Object oriented", "Not Object oriented", "Semi Object-oriented or Partial Object-oriented", "None of the above"], "Semi Object - oriented or Partial Object - oriented"),
                                new Question("Which of the following is the correct syntax for printing the address of the first element?", ["array[0];", "array[1];", "array[2];", "None of the above"], "array[0];"),
                                new Question("Which of the following gives the 4th element of the array?", ["Array[0];", "Array[1];", "Array[3];", "None of the above"], "Array[3];")
                            ];

                            // create quiz
                            var quiz = new Quiz(questions);

                            // display quiz
                            populate();
                        </script>

                        <div class="template-example">
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">


                                    <p><a href="Index.php" class="btn btn-primary"> Previous </a>
                                        <a href="cexer.php" class="btn btn-primary"> Next </a>
                                    </p>
                                    <br>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>




        <footer id="footer" class="styling">
            <div class="container">
                Copyright &copy CodeGeek. All Rights Reserved | Contact Us: +91 90000 00000
            </div>
        </footer>

        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                navActivePage();
                scrollRevelation('.reveal');
            });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>


        <script type="text/javascript" src="main.0cf8b554.js"></script>
    </body>

</html>

