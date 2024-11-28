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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya&family=Alegreya+Sans+SC&family=Comfortaa&family=DM+Serif+Text&family=Montserrat&family=Nunito&family=SUSE:wght@700&family=Volkhov&display=swap"
        rel="stylesheet">


    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="css/invlogstyle2.css?v=<?php echo time(); ?>">

</head>

<body>

    <!--nav-->
    <div class="navcontainer">
        <div class="navigation">
            <ul>
                <li class="logolink">
                    <a href="./uhome.html">
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
                        <span class="navicon"><i class="fa-solid fa-pen-to-square"></i></span>
                        <span class="titles">Inventory Log</span>
                    </a>
                </li>

            </ul>

        </div>

        <div class="main"><!--main content/body-->
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

            </div><!--tobar end-->


            <!--body content-->
            <div class="bodcont">
                <h1>Inventory Log</h1>

                <div class="prof-form" id="prof-form"><!--prof-form-->
                    <h4>Requester's Information</h4>
                    <div class="pid"><!--first form-->
                        <label class="lblpid">ID Number</label>

                        <input id="inpid" type="number" placeholder="00000000" required oninput="limitInputLength(this)">
                    </div>

                    <div class="pname">
                        <label class="lblpname">Requester's Name</label>

                        <div class="fullname">
                            <input id="txtplname" type="text" placeholder="Last Name" required>
                            <input id="txtpfname" type="text" placeholder="First Name" required>
                            <input id="txtpmname" type="text" placeholder="Middle Name" required>
                        </div>
                    </div>

                    <div class="pdes">
                        <label class="lblpdes">Designation</label>

                        <form class="des-drop">
                            <select id="sel-des" class="des-opts" required>
                                <option id="des1" value="" disable selected hidden>Select Designation</option>
                                <option id="des2" value="Faculty">Faculty</option>
                                <option id="des3" value="Student">Student</option>
                                <option id="des4" value="Classified">Classified</option>
                            </select>
                        </form>

                    </div>

                    <div class="btnbtm">
                        <button type="button" class="btnpid" onclick="toreqForm()">Next</button>
                        <button type="button" class="btnx" onclick="toxForm()">Cancel</button>
                    </div>

                </div><!--requester form end-->


                <div class="item-form" id="item-form">
                    <h4>Request Details</h4>

                    <div class="itemdets">

                        <div class="itid">
                            <label class="itype">Item Type</label>

                            <form>
                                <select id="sel-item" class="itmopts" required>
                                    <option id="item1" value="" disable selected hidden>Choose Item Type</option>
                                    <option id="item2" value="">Equipment</option>
                                    <option id="item3" value="">Furniture</option>
                                    <option id="item4" value="">Supply</option>
                                </select>
                            </form>
                        </div>


                        <div class="item">
                            <label class="itmname">Item Name</label>

                            <input id="txtiname" type="text" placeholder="Item Name" required>

                        </div>

                        <div class="reqdets">
                            <label class="lblquant">Quantity</label>
                            
                            <input id="quantval" type="number" placeholder="0" required>

                        </div>

                    </div>

                    <div class="act">
                        <label class="lblact">Action</label>

                        <form>
                            <select id="sel-act" class="actopts" required>
                                <option id="act1" value="" disable selected hidden>What's the action?</option>
                                <option id="act2" value="">Borrow</option>
                                <option id="act3" value="">Transfer</option>
                                <option id="act4" value="">Others</option>
                             </select>
                        </form>
                    </div>

                    <div class="details">
                        <label class="lbldets">Details</label>

                        <textarea id="dets-text" 
                            name="w3review" 
                            rows="4" 
                            cols="50"
                            placeholder="Enter Details Here..." required>
                        </textarea>
                    </div>

                    <div class="btnbtm">
                        <button type="button" class="btnrid" onclick="toiniForm()">Next</button>
                        <button type="button" class="btnx" onclick="toxForm()">Cancel</button>
                    </div>


                </div>



                <div class="ini-form" id="ini-form"><!--Initiator Form-->
                    <h4>Initiator's Information</h4>

                    <div class="iid"><!--first form-->
                        <label class="lbliid">ID Number</label>

                        <input id="iniid" type="number" required oninput="limitInputLength(this)">
                    </div>

                    <div class="pname">
                        <label class="lbliname">Requester's Name</label>

                        <div class="fullname">
                            <input id="txtilname" type="text" placeholder="Last Name" required>
                            <input id="txtifname" type="text" placeholder="First Name" required>
                            <input id="txtimname" type="text" placeholder="Middle Name" required>
                        </div>
                    </div>

                    <div class="ides">
                        <label class="lblides">Designation</label>

                        <form class="des-drop">
                            <select id="ides-sel" class="ides-opts" required>
                                <option id="ides1" value="" disable selected hidden>Select Designation</option>
                                <option id="ides2" value="Faculty">Faculty</option>
                                <option id="ides3" value="Student">Student</option>
                                <option id="ides4" value="Classified">Classified</option>
                            </select>
                        </form>

                    </div>

                    <div class="btnbtm">
                        <button type="button" class="btniid" onclick="toprofForm()">Submit</button>
                        <button type="button" class="btnx" onclick="toxForm()">Cancel</button>
                    </div>

                </div><!--initiator end-->


            </div>
            <!--body content end-->


        </div> <!--main end-->

    </div><!--navcontainer end-->


    <!--scripts-->
    <script src="js/invlogjs.js"></script>



</body>

</html>