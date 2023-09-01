<?php

//if(!isset($_POST['submit'])){
   // header('location: ../SignUp.php');
//}
//else {

    require 'DBSetup.php';
    require 'functions.php';

    $firstName = trim($_POST['firstNameInput']);
    $lastName = trim($_POST['lastNameInput']);
    $badge = trim($_POST['badgeInput']);
    $email = trim($_POST['emailInput']);



    $emailPattern = '/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/';



//Server side validation


    if ($firstName == "" || $firstName == null || strlen($firstName) > 20) {
        header('location: ../SignUp.php?errorMsg=Validation Error 1');
    } else if ($lastName == "" || $lastName == null || strlen($lastName) > 20) {
        header('location: ../SignUp.php?errorMsg=Validation Error 2');
    } else if ($badge == "" || $badge == null || strlen($badge) > 5) {
        header('location: ../SignUp.php?errorMsg=Validation Error 3');
    } else if ($email == "" || $email == null || !preg_match($emailPattern, $email)) {
        header('location: ../SignUp.php?errorMsg=Validation Error 4');
    } else if (checkIfEmailExist($conn, $email)) {
        header('location: ../SignUp.php?errorMsg=email exist');
    } else {
        addNewUser($conn, $firstName, $lastName, $badge, $email);
        //header("location: ../signUpSuccess.html");
    }
//}


