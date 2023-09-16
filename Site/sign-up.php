<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PolarisProject8-2023</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Roboto.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body style="color: var(--bs-emphasis-color);background: #212529;">
<div id="formContainer"
     style="width: 800px;background: #2d343d;height: 607px;margin: auto;margin-top: 200px;border-radius: 11px;box-shadow: 8px 8px 3px 0px rgba(52,70,105,0.19), 4px 4px 4px 0px rgba(105,149,237,0.1);padding: 20px;padding-top: 20px;padding-right: 20px;padding-left: 47px;">
    <?php
    if(isset($_GET['errorMsg'])&& $_GET['errorMsg'] == "Validation Error 1")
        echo "<h5 style = \"color:red ; text-align: center\">Name Input Validation Failed</h5>";
    if(isset($_GET['errorMsg'])&& $_GET['errorMsg'] == "Validation Error 2")
        echo "<h5 style = \"color:red ; text-align: center\">Last Name Input Validation Failed</h5>";
    if(isset($_GET['errorMsg'])&& $_GET['errorMsg'] == "Validation Error 3")
        echo "<h5 style = \"color:red ; text-align: center\">Badge Input Validation Failed</h5>";
    if(isset($_GET['errorMsg'])&& $_GET['errorMsg'] == "Validation Error 4")
        echo "<h5 style = \"color:red ; text-align: center\">Email Input Validation Failed</h5>";
    if(isset($_GET['errorMsg'])&& $_GET['errorMsg'] == "email exist")
        echo "<h5 style = \"color:red ; text-align: center\">Email is already in use</h5>";
    ?>

    <h3 style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;margin-bottom: 3px;margin-top: 29px;">Access Request Form</h3>
    <form id="signupForm" class="needs-validation" style="margin-top: 20px;width: 40%;display: inline-block;"
          method="POST" action="PHP/signupFH.php" novalidate>
        <label class="form-label"
               style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;margin-bottom: 3px;"
               for="firstNameInput">First Name</label><input class="form-control"
                                                              type="text"
                                                              id="firstNameInput"
                                                              name="firstNameInput"
                                                              style="color: var(--bs-body-color);font-family: Roboto, sans-serif;margin-bottom: 3px;"
                                                              required="">
        <div id="firstNameErr" class = "text-danger"></div>
        <label class="form-label"
               style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;margin-bottom: 3px;margin-top: 10px;"
               for="lastNameInput">Last Name</label><input class="form-control"
                                                           type="text"
                                                           id="lastNameInput"
                                                           name="lastNameInput"
                                                           style="color: var(--bs-body-color);font-family: Roboto, sans-serif;margin-bottom: 3px;"
                                                           required="">
        <div id="lastNameErr" class = "text-danger"></div>
        <label class="form-label"
               style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;margin-bottom: 3px;margin-top: 10px;"
               for="badgeInput">Badge Number</label><input class="form-control"
                                                           type="text"
                                                           id="badgeInput"
                                                           name="badgeInput"
                                                           style="color: var(--bs-body-color);font-family: Roboto, sans-serif;margin-bottom: 3px;"
                                                           required="">
        <div id="badgeErr" class = "text-danger"></div>
        <label class="form-label"
               style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;margin-bottom: 0px;margin-top: 10px;"
               for="emailInput">Email</label><input class="form-control"
                                                    type="email"
                                                    id="emailInput"
                                                    name="emailInput"
                                                    style="color: var(--bs-body-color);font-family: Roboto, sans-serif;margin-bottom: -1px;"
                                                    required="">
        <div id="emailErr" class = "text-danger"></div>
        <div style="text-align: center;margin-top: 30px;"><input class="btn btn-primary" type="submit"
                                                                 style="font-family: Roboto, sans-serif;background: rgb(13, 110, 253);width: 100%;">
        </div>
    </form>
    <div style="display: inline-block;margin-left: 81px;margin-bottom: 88px;"><img
            src="assets/img/Polaris%20logo%20White.svg" width="305" height="250"
            style="display: block;margin-top: 0px;border-style: none;"></div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/signupVal.js"  defer></script>
</body>

</html>