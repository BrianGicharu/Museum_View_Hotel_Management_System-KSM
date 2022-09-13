<?php

// File containing the PDO connection object
include_once("./database/connection.php");

// This function assists in logging in
function verify_sign_in($usrtype, $usrName, $usrPass)
{
    echo "<script>console.log(".$usrtype.");</script>";
    
    switch (strtolower($usrtype)) {
        case 'reception':
            header("Location:./route/reception.php");
            // session($usrName);
            break;
        case 'admin':
            header("Location:./route/admin.php");
            break;
        case 'store':
            header("Location:./route/store.php");
            break;
        default:
            header("Location:./route/error_404.php");
    }
}


// //session build
// function session($user){
//     $_SESSION['user'] = $user;
// }

// // admin session
// function admin()
// {
// }
// // reception session
// function reception()
// {
// }
// // admin session
// function store_keeping()
// {
// }
