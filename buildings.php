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
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Montserrat:wght@100..900&family=Comfortaa&family=Nunito:ital@0;1&family=Volkhov&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="css/buildstyle3.css?v=<?php echo time(); ?>">

</head>

<body>

    <!--nav-->
    <div class="navcontainer">
        <div class="navigation">
            <ul>
                <li class="logolink">
                    <a href="./uhome.html">
                        <span class="navicon"><img class="topicon" src="images/sarmiento.png"></span>
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
                        <span class="navicon"><i class="fa-solid fa-pen-to-square"></i></span>
                        <span class="titles">Inventory Log</span>
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
            <div class="heading"><label class="headlabel">CAMPUS BUILDINGS</label></div>

            <!--Content body start-->
            <div class="content-body">


                <!--slides-->
                <div class="slidewrap">

                    <i id="left" class="fa-solid fa-circle-chevron-left"></i>

                    <ul class="carousel">
                        <li class="cards" data-bs-toggle="modal" data-bs-ride="carousel" data-bs-target="#ModalA">
                            <div class="card-head">
                                <h2>BUILDING A</h2>
                                <h4>Room 101<br>to<br>Room 105</h4>
                            </div>
                        </li>

                        <li class="cards" data-bs-toggle="modal" data-bs-ride="carousel" data-bs-target="#ModalB">

                            <div class="card-head">
                                <span class="card-overlay"></span>
                                <h2>BUILDING B</h2>
                                <h4>Room 101<br>to<br>Room 105</h4>
                            </div>
                        </li>

                        <li class="cards" data-bs-toggle="modal" data-bs-ride="carousel" data-bs-target="#ModalC">
                            <div class="card-head">
                                <span class="card-overlay"></span>
                                <h2>BUILDING C</h2>
                                <h4>Room 101<br>to<br>Room 105</h4>
                            </div>
                        </li>

                        <li class="cards" data-bs-toggle="modal" data-bs-ride="carousel" data-bs-target="#ModalD">
                            <div class="card-head">
                                <span class="card-overlay"></span>
                                <h2>BUILDING D</h2>
                                <h4>Room 101<br>to<br>Room 105</h4>
                            </div>
                        </li>

                        <li class="cards" data-bs-toggle="modal" data-bs-ride="carousel" data-bs-target="#ModalE">
                            <div class="card-head">
                                <span class="card-overlay"></span>
                                <h2>BUILDING E</h2>
                                <h4>Room 101<br>to<br>Room 105</h4>
                            </div>
                        </li>

                    </ul>
                    <i id="right" class="fa-solid fa-circle-chevron-right"></i>

                </div>

                <!-- Modal A-->
                <div class="modal fade" id="ModalA" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Select Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action">Room 101</a>
                                        <a class="list-group-item list-group-item-action">Room 102</a>
                                        <a class="list-group-item list-group-item-action">Room 103</a>
                                        <a class="list-group-item list-group-item-action">Room 104</a>
                                        <a class="list-group-item list-group-item-action">Room 105</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="calendar.html">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal B-->
                <div class="modal fade" id="ModalB" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Select Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action">Room 101</a>
                                        <a class="list-group-item list-group-item-action">Room 102</a>
                                        <a class="list-group-item list-group-item-action">Room 103</a>
                                        <a class="list-group-item list-group-item-action">Room 104</a>
                                        <a class="list-group-item list-group-item-action">Room 105</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="calendar.html">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal C-->
                <div class="modal fade" id="ModalC" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Select Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action">Room 101</a>
                                        <a class="list-group-item list-group-item-action">Room 102</a>
                                        <a class="list-group-item list-group-item-action">Room 103</a>
                                        <a class="list-group-item list-group-item-action">Room 104</a>
                                        <a class="list-group-item list-group-item-action">Room 105</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="calendar.html">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal D-->
                <div class="modal fade" id="ModalD" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Select Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action">Room 101</a>
                                        <a class="list-group-item list-group-item-action">Room 102</a>
                                        <a class="list-group-item list-group-item-action">Room 103</a>
                                        <a class="list-group-item list-group-item-action">Room 104</a>
                                        <a class="list-group-item list-group-item-action">Room 105</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="calendar.html">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal E-->
                <div class="modal fade" id="ModalE" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Select Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action">Room 101</a>
                                        <a class="list-group-item list-group-item-action">Room 102</a>
                                        <a class="list-group-item list-group-item-action">Room 103</a>
                                        <a class="list-group-item list-group-item-action">Room 104</a>
                                        <a class="list-group-item list-group-item-action">Room 105</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="calendar.html">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-->


                <!--slides end-->
            </div>
            <!--Content body end-->

            <!--main body end-->
        </div><!--main end-->

    </div>



    <!--scripts-->
    <script src="js/buildjs.js"></script>





</body>

</html>