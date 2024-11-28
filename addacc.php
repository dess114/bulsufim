<?php
require_once("con.php");
session_start();
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
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Montserrat:wght@100..900&family=Comfortaa&family=Nunito:ital@0;1&family=Volkhov&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">

    <!--bootstrap-->


    <link rel="stylesheet" href="css/addcss.css?v=<?php echo time(); ?>">

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
                <h1>New Account</h1>

                <div class="bodwrap">
                    <form action="" id="createForm" method="post">
                        <div class="newacc-form" id="newacc-form"><!--new account-form-->
                            <h2>New Account Information</h2>

                            <div class="uid"><!--first form-->
                                <label class="lbluid">ID Number</label>

                                <input id="id" type="number" placeholder="00000000" required name="id">
                            </div>

                            <div class="uname">
                                <label class="lbluname">Name</label>

                                <div class="fullname">
                                    <input type="text" placeholder="Last Name" required name="lname" id="lname">
                                    <input type="text" placeholder="First Name" required name="fname" id="fname">
                                    <input type="text" placeholder="Middle Name" name="mname" id="mname">
                                </div>
                            </div>

                            <div class="udes">
                                <label class="lbludes">Designation</label>

                                <form class="des-drop">
                                    <select id="desigs" class="des-opts">
                                        <option id="des1" value="" disable selected hidden>Select Designation</option>
                                        <option id="des2" value="Faculty">Faculty</option>
                                        <option id="des3" value="Student">Admin</option>
                                        <option id="des4" value="Classified">Classified</option>
                                    </select>
                                </form>
                            </div>

                            <div class="new-email">
                                <label class="lblnewemail">Email</label>
                                <input id="email" type="text" placeholder="Email Address">
                            </div>

                            <div class="new-num">
                                <label class="lblnewcnum">Contact</label>
                                <input id="contact" type="text" placeholder="Contact Number">
                            </div>

                            <div class="btnbtm">
                                <button type="submit" class="btndone" name="submit" id="update">Submit</button>
                                <button type="button" class="btnx">Cancel</button>
                            </div>

                        </div><!--add account form end-->
                    </form>
                </div>



            </div>


            <!--body content end-->


        </div> <!--main end-->

    </div><!--navcontainer end-->



    <!--scripts-->
    <script src="js/addaccjs.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <script>
        let accountForm = document.getElementById("createForm");

        accountForm.addEventListener("submit", (e) => {

            var spinner = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>'

            document.getElementById("update").innerHTML = spinner
            e.preventDefault();

            var userID = document.getElementById('id').value;
            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
            var mname = document.getElementById('mname').value;
            var desigs = document.getElementById('desigs').value;
            var email = document.getElementById('email').value;
            var contact = document.getElementById('contact').value;
            $.ajax({
                url: "process-addact.php",
                method: 'post',
                data: {
                    id: userID,
                    fname: fname,
                    lname: lname,
                    mname: mname,
                    desigs: desigs,
                    email: email,
                    contact: contact,
                },
                success: function (data) {
                    document.getElementById("update").innerHTML = "Submit"
                    alert("Account is successfully created!");
                    window.location.href = "addacc.php";

                }, error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log("Status: " + textStatus); console.log("Error: " + errorThrown);
                }

            })
        });







    </script>





</body>

</html>