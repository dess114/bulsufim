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


    <link rel="stylesheet" href="css/additemcss.css?v=<?php echo time(); ?>">

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
                <h1>New Inventory Item</h1>

                <div class="bodwrap">
                    <div class="newitem-form" id="newitem-form"><!--new item-form-->
                        <h2>Item Details</h2>

                        <div class="itemid"><!--first form-->
                            <!--item id-->
                            <label class="lblitemid">Item ID</label>
                            <input id="txtitemid" type="text" placeholder="00000000" required>

                            <label class="lblitname">Item Name</label>
                            <input id="txtitname" type="text" placeholder="Item Name" required>
                        </div>

                        <div class="itemtype">
                            <div class="typdets">
                                <label class="lbltype">ITem Type</label>

                                <div class="typ">
                                    <form class="typ-drop">
                                        <select id="sel-typ" class="typ-opts" required>
                                            <option id="typ1" value="" disable selected hidden>Select Item Type</option>
                                            <option id="typ2" value="Equipment">Equipment</option>
                                            <option id="typ3" value="Furniture">Furniture</option>
                                            <option id="typ4" value="Supply">Supply</option>
                                        </select>
                                    </form>
                                </div>

                            </div>

                            <div class="custody-stat">
                                <label class="lblcust-stat">Custody</label>
                                <div class="cust-stat">
                                    <form class="cust-drop">
                                        <select id="sel-cus" class="cust-opts" required>
                                            <option id="cus1" value="" disable selected hidden>Custody Status</option>
                                            <option id="cus2" value="Under Custody">Under Custody</option>
                                            <option id="cus3" value="No Custodian">No Custodian</option>
                                        </select>
                                    </form>

                                </div>

                            </div>
                        </div>

                        <div class="custodian">
                            <label class="lblcust-name">Custodian</label>

                            <div class="fullname">
                                <input id="txtulname" type="text" placeholder="Last Name" required>
                                <input id="txtufname" type="text" placeholder="First Name" required>
                                <input id="txtumname" type="text" placeholder="Middle Name" required>
                            </div>
                        </div>

                        <div class="itemstat">
                            <div class="itemquant">
                                <label class="lblitemq">Quantity</label>
                                <input id="txtitmq" type="number" placeholder="0" required>
                            </div>

                            <div class="status">
                                <label class="lblitemstat">Status</label>
                                <input id="txtitmstat" type="text" placeholder="Status" disabled required>
                            </div>
                        </div>

                        <div class="description">
                            <label class="lbldesc">Description</label>
                            <textarea id="txtdesc" placeholder="Item Description"></textarea>
                        </div>

                        <div class="facility">
                            <div class="facID">
                                <label class="lblfac">FID</label>
                                <input type="text" id="txtfac" placeholder="Facility ID">    
                            </div>

                            <div class="facname">
                                <label class="lblfacname">Facility</label>
                                <input type="text" id="txtfacname" placeholder="Room Name">    
                            </div>
                            
                        </div>



                        <div class="btnbtm">
                            <button type="button" class="btndone">Done</button>
                            <button type="button" class="btnx">Cancel</button>
                        </div>

                    </div><!--add account form end-->

                </div>



            </div>


            <!--body content end-->


        </div> <!--main end-->

    </div><!--navcontainer end-->



    <!--scripts-->
    <script src="js/additemjs.js"></script>





</body>

</html>