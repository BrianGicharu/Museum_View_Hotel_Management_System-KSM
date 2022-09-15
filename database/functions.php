<?php

// File containing the PDO connection object
include("connection.php");

global $var;

// This function assists in logging in
function verify_sign_in($usrtype, $usrName, $usrPass){
    switch (strtolower($usrtype)) {
        case 'reception':
            header("Location:./route/reception.php");
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

function randID($pre_text)
{
    for ($i = 0; $i < 5; $i++) {
        $pre_text .= rand(0, 9);
    }
    return $pre_text;
}
