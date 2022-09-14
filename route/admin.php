<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Include all php files here
    include_once("../resources/svg_files/svg.php");
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/body.css">
    <title>Document</title>
</head>

<body style="background-color:bisque;background-image:url('https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');">
    <div class="" style="display:flex;height:100%;">
        <div class="nav_height" style="background-color:hsl(210,8%,15%);">
            <nav class="" style="display:contents;">
                <div class="">
                    <div class="" style="color:pink;padding:5%;padding-top:10%;">
                        <span style="padding-left: 10px;">                            
                                <?php
                                // prints the user icon followed by username and if null, 'username' is shown
                                echo "<span>".showUserSVG()."</span>";
                                echo "<h class=\"h6\" style=\"padding-left:10px;caret-color:transparent;text-align:center;\">@" . ($_SESSION['username'] ?? "username")."</span>";
                                ?>
                        </span>
                    </div>
                </div>
                <hr>
                <h1 class="h1 nav_bar001" style="caret-color:transparent;color:wheat;font-size:xx-larger;padding-top:2px;padding-bottom:2px;">
                    Menu
                </h1>
                <hr class="hr">
                <ul style="text-align: center;">
                    <li><a href="#">Item 001</a></li>
                    <li><a href="#">Item 002</a></li>
                    <li><a href="#">Item 003</a></li>
                    <li><a href="#">Item 004</a></li>
                    <li><a href="#">Item 005</a></li>
                    <li><a href="#">Item 006</a></li>
                    <li><a href="#">Item 007</a></li>
                    <li><a href="#">Item 008</a></li>
                    <li><a href="#">Item 009</a></li>
                </ul>
            </nav>
        </div>
        <div class="col">
            <!-- Header -->
            <div class="row" style="padding:5px;padding-top:1px;color:aliceblue;background-color:beige;" name="page header">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolor libero voluptatibus necessitatibus soluta ratione laborum eligendi. Culpa, quaerat officia alias voluptas voluptatibus, aut recusandae, reprehenderit nostrum at voluptate soluta!</p>
            </div>
            <div>
                <?php
                echo $rightContainer;
                ?>
            </div>

        </div>
    </div>

    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <script src="../vendor/countdowntime/countdowntime.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/login.js"></script>

</body>

</html>