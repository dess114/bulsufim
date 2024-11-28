<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>ITDS-FIM</title>

    <!-- Web icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/sarmiento.png">


    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+SC&family=Comfortaa&family=Nunito:ital@0;1&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">

    <!--bootstrap-->



    <link rel="stylesheet" href="css/ahomestyle.css?v=<?php echo time(); ?>">

</head>

<body>

    <!--nav-->
    <div class="navcontainer">
        <div class="navigation">
            <ul>
                <li class="logolink">
                    <a href="#">
                        <span class="navicon"><img class="topicon" src="images/sarmiento.png"></i></span>
                        <span class="titles"><img class="toplogo" src="images/bulsuwht.png"></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="navicon"><i class="fa-regular fa-calendar-check"></i></span>
                        <span class="titles">Schedule</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="navicon"><i class="fa-solid fa-box-open"></i></span>
                        <span class="titles">Inventory</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="navicon"><i class="fa-solid fa-users"></i></span>
                        <span class="titles">Accounts</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="navicon"><i class="fa-solid fa-pen-to-square"></i></span>
                        <span class="titles">Inventory Log</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="navicon"><i class="fa-solid fa-user-plus"></i></span>
                        <span class="titles">Add Accounts</span>
                    </a>
                </li>

            </ul>

        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>


                <div class="profile">
                    <i class="fa-solid fa-user">
                        <div class="profsub">
                            <ul class="subs">
                                <li class="subline"><a class="gtprof" href="#">Profile</a></li>
                                <li class="subline"><a class="gtout" href="#">Sign Out</a></li>
                            </ul>
                        </div>
                    </i>
                </div>

            </div>

            <!--main body-->

            <div class="greet">
                <h1 class="hi">Hi, User!</h1>
            </div>

            <div class="main-opts">
                <div class="mainwrap">
                    <ul class="card-container">
                        <a href="./buildings.php">
                            <li class="cards">
                                <div class="card-head">
                                    <span class="card-overlay"></span>
                                    <h2 class="optname">Schedule</h2>
                                </div>
                            </li>
                        </a>
                        <a href="./buildings.php">
                            <li class="cards">
                                <div class="card-head">
                                    <span class="card-overlay"></span>
                                    <h2 class="optname">Inventory</h2>
                                </div>
                            </li>
                        </a>
                        <a href="./buildings.php">
                            <li class="cards">
                                <div class="card-head">
                                    <span class="card-overlay"></span>
                                    <h2 class="optname">Accounts</h2>
                                </div>
                            </li>
                        </a>

                    </ul>
                </div>
            </div>


        </div> <!--main end-->

    </div>



    <script src="js/ahomejs.js"></script>


</body>

</html>