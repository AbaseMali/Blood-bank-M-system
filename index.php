
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <title>Blood Bank Management System</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="home/css/freelancer.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Custom Fonts -->
    <link href="home/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body id="page-top" class="index" ng-app="loginModule">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Blood Bank Management System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="adminlogin.php">Login</a>
                    </li>

                    <style>
                        body {
                            font-family: Arial, Helvetica, sans-serif;
                        }

                        /* Full-width input fields */
                        input[type=text1],
                        input[type=password1] {
                            width: 80%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;
                            box-sizing: border-box;
                        }

                        /* Set a style for all buttons */


                        /* Extra styles for the cancel button */
                        .cancelbtn {
                            width: auto;
                            padding: 15px 18px;
                            background-color: #f44336;
                        }

                        /* Center the image and position the close button */
                        .imgcontainer {
                            text-align: center;
                            margin: 24px 0 12px 0;
                            position: relative;
                        }

                        img.avatar {
                            width: 40%;
                            border-radius: 50%;
                        }

                        .container {
                            padding: 16px;
                        }

                        span.psw {
                            float: right;
                            padding-top: 16px;
                        }

                        /* The Modal (background) */
                        .modal {
                            display: none;
                            /* Hidden by default */
                            position: fixed;
                            /* Stay in place */
                            z-index: 1;
                            /* Sit on top */
                            left: 0;
                            top: 0;
                            width: 100%;
                            /* Full width */
                            height: 100%;
                            /* Full height */
                            overflow: auto;
                            /* Enable scroll if needed */
                            background-color: rgb(0, 0, 0);
                            /* Fallback color */
                            background-color: rgba(0, 0, 0, 0.4);
                            /* Black w/ opacity */
                            padding-top: 60px;
                        }

                        /* Modal Content/Box */
                        .modal-content {
                            background-color: #fefefe;
                            margin: 5% auto 15% auto;
                            /* 5% from the top, 15% from the bottom and centered */
                            border: 1px solid #888;
                            width: 80%;
                            /* Could be more or less, depending on screen size */
                        }

                        /* The Close Button (x) */
                        .close {
                            position: absolute;
                            right: 15px;
                            top: 0;
                            color: #000;
                            font-size: 35px;
                            font-weight: bold;
                        }

                        .close:hover,
                        .close:focus {
                            color: red;
                            cursor: pointer;
                        }

                        /* Add Zoom Animation */
                        .animate {
                            -webkit-animation: animatezoom 0.6s;
                            animation: animatezoom 0.6s
                        }

                        @-webkit-keyframes animatezoom {
                            from {
                                -webkit-transform: scale(0)
                            }

                            to {
                                -webkit-transform: scale(1)
                            }
                        }

                        @keyframes animatezoom {
                            from {
                                transform: scale(0)
                            }

                            to {
                                transform: scale(1)
                            }
                        }

                        /* Change styles for span and cancel button on extra small screens */
                        @media screen and (max-width: 300px) {
                            span.psw {
                                display: block;
                                float: none;
                            }

                            .cancelbtn {
                                width: 100%;
                            }
                        }

                        .btn1 {
                            background-color: #ddd;
                            border: none;
                            color: black;
                            padding: 16px 32px;
                            text-align: center;
                            font-size: 16px;
                            margin: 4px 2px;
                            transition: 0.3s;
                        }

                        .btn1:hover {
                            background-color: #3e8e41;
                            color: white;
                        }

                        .btn2 {
                            background-color: #32CD32;
                            border: none;
                            color: whitesmoke;
                            padding: 16px 32px;
                            text-align: center;
                            font-size: 16px;
                            margin: 4px 2px;
                            transition: 0.3s;
                        }

                        .btn2:hover {
                            background-color: #f44336;
                            color: white;
                        }


                        .boxes {
                            display: inline-block;
                            width: 50%;
                            height: 50%;
                        }

                        #leftBox {
                            float: left;
                        }

                        #rightBox {
                            float: right;
                        }


                        #customers {
                            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                            color: white;

                        }

                        #customers td,
                        #customers th {
                            border: 1px solid #ddd;
                            padding: 8px;

                        }



                        #customers tr:hover {
                            background-color: #aaa;
                        }

                        #customers th {
                            padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #4CAF50;
                            color: white;
                        }

                        .con {
                            padding: 106px;
                        }
                    </style>
                    </head>

                    <body>


                        <script>
                            // Get the modal
                            var modal = document.getElementById('id01');

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>





                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>



        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img class="img-responsive bg-primary" src="logo.png" alt="">
                    <div class="intro-text">
                        <span class="name">Humanity</span>
                        <hr class="star-light">
                        <span class="skills">Blood - Bank - System </span>
                    </div>
                </div>

                


    </header>

    <!-- Portfolio Grid Section -->
    
    </div>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <dir>
                    <div class="col-lg-9 col-lg-offset-2 ">
                        <p> " This is Blood Bank Management System as a dashboard
                            where the Admin can view, store, modify OR delete a donors and recipeint's information. <br>
                            And the recipeint can Register Online and check , request the blood's
                            with this system. <br>
                            It has been developed by Group of two members <br>
                            And as of the Project detials we use OOP, PHP & MySQL.<br> It is assigned by our respectable Instructor Teacher: Ahemd Nasir    " <br><br>
                        </p>
                    </div>
                </dir>
                
            </div>
        </div>
    </section>

   

    <footer class="text-center  ">
        <div class="footer-above  visible-lg visible-md">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                       

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Blood Bank System</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw ">B</i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw ">L</i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw ">O</i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw ">O</i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw ">D</i></a>
                            </li>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; amal8852@admasuniversity.com && Abase9201@admasuniversity.com 2019 ICT Blood Management Systems
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



    <!-- jQuery -->
    <script src="home/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="home/js/bootstrap.min.js"></script>


    <script src="home/js/classie.js"></script>
    <script src="home/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="home/js/jqBootstrapValidation.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="home/js/freelancer.js"></script>









</body>

</html>