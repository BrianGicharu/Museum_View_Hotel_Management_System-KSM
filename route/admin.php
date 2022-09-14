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
    <div class="" style="display:flex;">
        <div class="nav_height" style="background-color:hsl(210,8%,15%);">
            <nav class="bg-dark" style="display:contents;height:100%;">
                <div class="">
                    <div class="" style="color:pink;padding:5%;padding-top:10%;">
                        <span style="padding-left: 10px;">
                            <?php
                            // prints the user icon
                            echo showUserSVG();
                            ?>
                        </span>
                        <h class="h6" style="padding-left:10px;caret-color:transparent;">
                            <?php
                            echo "@" . ($_SESSION['username'] ?? "username");
                            ?>
                        </h>
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

            <div class="row" style="padding:5px;background-color:wheat; margin-top:2%;margin-left:1%;margin-right:2%;">
                <p>the quick brown fox jumps over the lazy dog</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ducimus delectus quos officiis ipsum ullam officia accusamus inventore totam id! Possimus aperiam modi, ea cupiditate deleniti itaque rem laudantium voluptates!
                </p>
                <div class="div">
                    <p>
                        the brown function_exists
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                            </svg>
                        </span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, quia. Voluptatem nesciunt sed in nobis, eum itaque sequi enim reiciendis rem ad veritatis voluptatibus magnam consequatur debitis laborum exercitationem explicabo.
                    <h1>sadfgawedg</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aut dolores sapiente consequuntur animi ipsam, quis ut odit numquam? Suscipit hic similique perspiciatis tempora nihil et dolore necessitatibus ea velit.
                    </p>
                </div>
                <div class="container" style="color:aqua;background-color:black;">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="container">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime sed repellat blanditiis ipsam optio in veniam, autem porro praesentium iure assumenda quam laboriosam at explicabo, perspiciatis exercitationem inventore vitae necessitatibus.
                </div>
                <div class="container" style="background-color:aquamarine;">
                    <h3 class="h6">
                        Global variables
                    </h3>
                    <?php
                    echo "exportUserName()";
                    ?>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt in quasi obcaecati est magni perspiciatis ducimus quam sapiente, iste distinctio? Ut at culpa, autem voluptatibus cumque a voluptatem laudantium sit!
                        <Ri:a>hello!</Ri:a>
                    </p>
                </div>
                <div class="container" style="background-color:green;color:brown">
                    <h2 class="h2">
                        Loregjhg
                    </h2>
                    <p style="color:black;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis officia consequuntur consequatur impedit mollitia autem rem inventore odio quidem placeat pariatur dolores sequi perferendis, dolor, natus adipisci similique quis! Hic?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veritatis corporis commodi ipsam cumque cum incidunt! Recusandae, ex sequi repellendus totam, voluptate placeat, dolorum blanditiis voluptatum officiis esse alias eligendi?
                    </p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro natus iste modi neque, possimus culpa, nam inventore dolores sunt impedit quam beatae eius blanditiis alias eaque voluptas. Explicabo, voluptates! Vero?
                </div>
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