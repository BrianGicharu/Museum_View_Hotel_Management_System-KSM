<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Include all php files here
    include_once("../database/connection.php");
    include_once("../database/functions.php");
    include_once("../resources/svg_files/svg.php");

    // session_start();

    // fetch session variables from `sessions` sql table
    $sql = $conn->prepare("SELECT * FROM SESSION WHERE USER_ID LIKE ? LIMIT 1;");
    $sql->execute(['USER001']);
    $session_row = $sql->fetch();

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<body style="background-color:bisque;position:fixed;background-image:url('https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');">

    <div class="" style="display:flex;height:100%;">
        <div class="" style="caret-color:transparent;display:inline-block;flex-direction:row;align-items:flex-start;width:35%;">
            <!-- username here -->
            <div class="row" style="background-color:hsl(210,9%,15%);color:aliceblue;margin-left:0%;width:60%;height:10%;padding-bottom:10px;">
                <div class="">
                    <div class="" style="padding-bottom:2px;color:pink;padding:2%;padding-top:2%;">
                        <span style="padding-left: 5px;">
                            <?php
                            // prints the user icon followed by username and if null, 'username' is shown
                            echo
                            "<div style='display:flex;'>
                                    <span style='padding-left:8px;'>" . $userIcon . "</span>"
                                . "<h6 class=\"h6\" style=\"padding:5px;caret-color:transparent;text-align:center;\">@"
                                . ($session_row['USER_NAME'] ?? "username")
                                . "</h6>"
                                . "</div>";
                            ?>
                        </span>
                        <hr>
                        <!-- <h5 class="h5" style="color:wheat;font-size:xx-larger;text-align:center;">
                            Menu
                        </h5> -->
                    </div>
                </div>
            </div>
            <div class="row nav_height smooth-scroll" style="height:90%;width:fit-content;background-color:hsl(210,8%,15%);overflow-y:scroll;width:60%;margin-top:0%;margin-left:0%;">
                <nav class="" style="display:contents;">
                    <ul style="text-align: center;">
                        <span>
                            <?php
                            echo '<i class="bi bi-person-circle">' . $shield . '</i>';
                            ?>
                        </span>
                        <h5 style="color:aqua;">
                            Accounts
                            <hr>
                        </h5>
                        <li><a href="#">Manage Users</a></li>
                        <li><a href="#">Store Inventory</a></li>
                        <li><a href="#">Item 002</a></li>

                        <h5 style="color:aqua;padding-left:20px;">
                            Adminstrative
                        </h5>
                        <hr>

                        <li><a href="#">Item 006</a></li>
                        <li><a href="#">Item 007</a></li>
                        <li><a href="#">Item 008</a></li>

                        <h5 style="color:aqua;padding-left:20px;">
                            Server Logs
                        </h5>
                        <hr>

                        <li id="users_log"><a href="#">User Activity</a></li>
                        <li><a href="#">Store and Stock</a></li>
                        <li><a href="#">Guest Activity</a></li>
                        <li><a href="#">Reception</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col">
            <!-- Header -->
            <div class="row" style="margin-left:-23%;padding:5px;padding-top:1px;color:red;background-color:beige;" name="page_header">
                <form action="../index.php" method="POST">
                    <div style="float:inline-start;">
                    <button class="btn btn-danger" type="submit" name="killSession">
                        EXIT
                    </button>
                    <button class="btn btn-success" type="submit" name="btnScuccess">
                        Success
                    </button>
                    </div>
                </form>
                <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, tempore possimus officiis vel rem voluptatum porro quidem, in rerum quasi amet voluptates itaque illum repellendus temporibus nihil quaerat culpa aut. -->
            </div>
            <div>
                <div class="row" id="txt" style="margin-left:-23%;margin-bottom:50%;padding:5px;background-color:wheat; margin-top:2%;margin-right:2%;height:80%;">

                    1: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae odit quo suscipit mollitia impedit assumenda fugit atque, officia vel, ullam ex cupiditate, veritatis ducimus temporibus consectetur! Iusto, voluptatem eos! Natus.
                </div>
                <div class="container">
                    <?php
                    if (isset($_POST["killSession"])) {
                        session_destroy();
                        session_unset();

                        $stmt = $conn->prepare("TRUNCATE TABLE SESSION;");
                        $stmt->execute();

                        $session_row = null;
                        header("Location: ../index.php");
                    }
                    ?>
                </div>
                <script>
                    let clicked = false
                    document.getElementById("users_log")?.addEventListener("click", () => {
                        if (!clicked) {
                            var table = "<table>"
                            for (let x = 1; x < 20; x++) {
                                table += "<tr>"
                                for (let y = 1; y < 10; y++) {
                                    table += "<td>" + x * y + "</td>"
                                }
                                table += "</tr>"
                            }
                            table += "</table>"
                            document.getElementById("txt").innerHTML = table;
                            clicked = true
                        } else {
                            document.getElementById("txt").innerText = "";
                            clicked = false
                        }
                    })
                </script>
                <!-- // echo $rightContainer; -->
                <?php
                echo "<div style='background-color:antiquewhite;'";
                if (count($session_row) > 0) {
                    foreach ($session_row as $column) {
                        echo $column . ", ";
                    }
                }
                echo "</div> ";
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