<?php

// File containing the PDO connection object
include("connection.php");

global $var;

// This function assists in logging in
function verify_sign_in($usrtype, $usrName, $usrPass)
{
    echo "<script>console.log(" . $usrtype . ");</script>";

    switch (strtolower($usrtype)) {
        case 'reception':
            header("Location:./route/reception.php");

            break;
        case 'admin':
            global $var;
            $var = $usrName;
            header("Location:./route/admin.php");
            break;
        case 'store':
            header("Location:./route/store.php");
            break;
        default:
            header("Location:./route/error_404.php");
    }
}

function exportUserName()
{
    return $var ?? null;
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
