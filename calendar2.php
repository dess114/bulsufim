<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <title>ITDS-FIM</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description"
        content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
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


    <link rel="stylesheet" href="css/calstyle4.css">

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
                <div class="container">
                    <div class="left">
                      <div class="calendar">
                        <div class="month">
                          <i class="fas fa-angle-left prev"></i>
                          <div class="date">december 2015</div>
                          <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                          <div>Sun</div>
                          <div>Mon</div>
                          <div>Tue</div>
                          <div>Wed</div>
                          <div>Thu</div>
                          <div>Fri</div>
                          <div>Sat</div>
                        </div>
                        <div class="days">
                          <div class="day prev-date">30</div>
                          <div class="day prev-date">31</div>
                          <div class="day">1</div>
                          <div class="day">2</div>
                          <div class="day">3</div>
                          <div class="day">4</div>
                          <div class="day">5</div>
                          <div class="day">6</div>
                          <div class="day">7</div>
                          <div class="day">8</div>
                          <div class="day">9</div>
                          <div class="day">10</div>
                          <div class="day">11</div>
                          <div class="day">12</div>
                          <div class="day">13</div>
                          <div class="day">14</div>
                          <div class="day">15</div>
                          <div class="day">16</div>
                          <div class="day">17</div>
                          <div class="day">18</div>
                          <div class="day">19</div>
                          <div class="day">20</div>
                          <div class="day">21</div>
                          <div class="day today">22</div>
                          <div class="day">23</div>
                          <div class="day">24</div>
                          <div class="day">25</div>
                          <div class="day">26</div>
                          <div class="day">27</div>
                          <div class="day">28</div>
                          <div class="day">29</div>
                          <div class="day">30</div>
                          <div class="day next-date">1</div>
                          <div class="day next-date">2</div>
                          <div class="day next-date">3</div>

                        </div>
                        <div class="goto-today">
                          <div class="goto">
                            <input type="text" placeholder="mm/yyyy" class="date-input" />
                            <button class="goto-btn">Go</button>
                          </div>
                          <button class="today-btn">Today</button>
                        </div>
                      </div>
                    </div>
                    <div class="right">
                      <div class="today-date">
                        <div class="event-day">date</div>
                        <div class="event-date">12th december 2022</div>
                      </div>
                      <div class="events"></div>
                      <div class="add-event-wrapper">
                        <div class="add-event-header">
                          <div class="title">Add Event</div>
                          <i class="fas fa-times close"></i>
                        </div>
                        <div class="add-event-body">
                          <div class="add-event-input">
                            <input type="text" placeholder="Event Name" class="event-name" />
                          </div>
                          <div class="add-event-input">
                            <input
                              type="text"
                              placeholder="Event Time From"
                              class="event-time-from"
                            />
                          </div>
                          <div class="add-event-input">
                            <input
                              type="text"
                              placeholder="Event Time To"
                              class="event-time-to"
                            />
                          </div>
                        </div>
                        <div class="add-event-footer">
                          <button class="add-event-btn">Add Event</button>
                        </div>
                      </div>
                    </div>
                    <button class="add-event">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>

            </div>

            <!--body content end-->


        </div> <!--main end-->

    </div><!--navcontainer end-->



    <!--scripts-->
    <script src="js/caljs.js"></script> 





</body>

</html>