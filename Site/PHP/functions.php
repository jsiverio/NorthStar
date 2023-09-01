<?php
require 'DBSetup.php';


//Function to insert new user in to the database.
function addNewUser($conn, $firstName, $lastName, $badge, $email): void
{
    $sqlQuery = "CALL userADD(?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sqlQuery)) {
        echo "Query error";
    }
    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $badge,$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

}
function checkIfEmailExist($conn,$emailAddressToCheck){
    $sqlQuery = "SELECT email FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sqlQuery)){
        echo "SQL Error";
    }
    mysqli_stmt_bind_param($stmt,"s",$emailAddressToCheck);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_stmt_affected_rows($stmt)>0)
        return true;
    else
        return false;

}
