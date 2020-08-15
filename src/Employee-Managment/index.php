<?php
// Setting Cookies

$cookie_value = "Employee Management";
setcookie("sitename", $cookie_value, time() + 3600, "/", 1, 1);

?>
<html>

<head>
  <header id="sticky">&copy&nbspBlueBayAsia Employee Managment System 2020</header>

    <!-- We use Cookies Message from  https: //cookieconsent.insites.com -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                },
                "content": {
                    "href": "#"
                }
            })
        });

    </script>

    <!-- Service Worker -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="google" content="notranslate" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="0" />
    <script>
        // register service worker:
        if (navigator.serviceWorker) {
            navigator.serviceWorker.register('/service-worker.js').then(function() {
                    return navigator.serviceWorker.ready;
                })
                .then(function(registration) {
                    console.log(registration); // service worker is ready and working...
                });

            navigator.serviceWorker.addEventListener('message', function(event) {
                console.log(event.data.message); // Hello World !
            });
        }

    </script>
    <!-- ./Service Worker -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style_front.css">
    <title>Employee Managment System</title>
</head>

<body>

    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="menu">
            <hr>
            <li><a href="employee/">Employee</a></li>
            <li><a href="employee/register.php">EmpRegister</a></li>

            <hr>
            <li><a href="admin/">Admin</a></li>
        </ul>

    </div>
    </div>
    <div class="cards-list">

    <div class="card 1">
      <button class="card_image"> <a href="admin/"><img src="images/admin.png" /> </a></button>
     <div class="card_title title-black">
        <p>Admin Login</p>
      </div>
    </div>

      <div class="card 2">
      <button class="card_image"><a href="employee/">
        <img src="images/emp.png"/>
      </button>
      <div class="card_title title-black">
        <p>Employee Login</p>
      </div>
    </div>

    <div class="card 3">
      <button class="card_image"><a href="employee/register.php"> <img src="images/employee.png" /></a> </button>
      <div class="card_title title-black">
        <p>EmpRegistration</p>
      </div>
    </div>

    </div>


    <!-- Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        //Slider
        $(document).ready(function() {
            $('.slider').bxSlider();
        });
        //Side Bar Toogle
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle('active');}


    </script>
</body>

</html>
