<?php
require_once "con.php";
session_start();


$sql="SELECT * FROM tbl_users WHERE UID = 20240001";
$stmt = $con->prepare( $sql);
$stmt->execute();
$row = $stmt->fetch();
$userlname= $row ['lname'];
$upic= $row ['user_pic'];

?>

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
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Bebas+Neue&family=Montserrat:wght@100..900&family=Comfortaa&family=Nunito:ital@0;1&family=Volkhov&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="css/profstyle.css?v=<?php echo time(); ?>">

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
            <div class="bodycont">
                <div class="wrapper">
                    <div class="user-card">
                        <div class="user-card-img">
                            <img id="dp" src="<?php echo $upic?>" alt="Profile Picture" value="">
                        </div>

                        <div class="user-card-info">
                            <h1><?php echo $userlname ?> </h1>
                            <h2>FName, MName</h2>
                            <h3>UID</h3>
                            <p><span>Username:</span><input type="Text" id="uname" placeholder="Username" disabled></p>
                            <p><span>
                                    Password:
                                </span>

                                <input type="Password" id="pword" placeholder="Password" disabled>
                                <i class="fa-solid fa-eye-slash"></i>
                            </p>
                            <p><span>Email:</span><input type="Text" id="email" placeholder="Email Address" disabled></p>
                            <p><span>Contact No:</span><input type="text" id="cnum" placeholder="Contact" disabled></p>
                            <p><span>Desiganation:</span><input type="Text" id="desig" placeholder="Designation" disabled></p>

                        </div>

                    </div>

                    <!-- upd button !-->
                    <div id="updatebtn">
                        <button class="buttons" id="updprof" type="button" onclick="updfunc()">Update</button>

                    </div>

                    <!-- save buttons !-->
                    <div class="hidbtn" id="hidbtn">
                        <button class="buttons" id="updsave" type="button">Save</button>
                        <button class="buttons" id="updx" type="button">Cancel</button>
                    </div>




                </div>

            </div>

            <!--body content end-->


        </div> <!--main end-->

    </div><!--navcontainer end-->



    <!--scripts-->
    <script src="js/profjs.js"></script>

    <script>
        function updfunc() {
            // show
            document.getElementById("updatebtn").style.display = "none";
            //hide
            document.getElementById("hidbtn").style.display = "flex";

            //enable
            document.getElementById("uname").removeAttribute("disabled");
            document.getElementById("pword").removeAttribute("disabled");
            document.getElementById("cnum").removeAttribute("disabled");
            
            //style after button click
            document.getElementById("uname").style.borderBottom = "4px groove rgb(0, 0, 139)";
            document.getElementById("pword").style.borderBottom = "4px groove rgb(0, 0, 139)";
            document.getElementById("cnum").style.borderBottom = "4px groove rgb(0, 0, 139)";
        }
    </script>





</body>

</html>