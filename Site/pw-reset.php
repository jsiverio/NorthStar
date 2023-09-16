<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>PolarisProject8-2023</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/Roboto.css" />
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css" />
  </head>

  <body
    style="color: var(--bs-emphasis-color); background: var(--bs-body-color)"
  >
    <div
      id="container"
      style="
        width: 400px;
        background: #2d343d;
        height: 600px;
        margin: auto;
        margin-top: 200px;
        border-radius: 11px;
        box-shadow: 8px 8px 3px 0px rgba(52, 70, 105, 0.19),
          4px 4px 4px 0px rgba(105, 149, 237, 0.1);
        padding: 20px;
      "
    >
      <div class="text-center" id="divLogo" style="padding-top: 10px">
        <img
          src="assets/img/Polaris%20logo%20White.svg"
          width="268"
          height="86"
          style="margin: 0px"
        />
      </div>
      <h5
        style="
          font-family: Roboto, sans-serif;
          color: var(--bs-secondary-bg);
          text-align: center;
          margin-top: 25px;
        "
      >
        Password Reset
      </h5>
      <form
        id="pwResetForm"
        class="needs-validation"
        style="
          padding-top: 32px;
          padding-right: 35px;
          padding-left: 35px;
          margin-top: 15px;
        "
        method="post"
        target="_self"
        novalidate=""
      >
        <div>
          <label
            class="form-label"
            style="
              color: var(--bs-body-bg);
              font-family: Roboto, sans-serif;
              margin-bottom: 3px;
            "
            for="emailInput"
            >Email</label
          ><input
            class="form-control"
            type="email"
            id="emailInput"
            style="background: rgb(213, 214, 215); padding-right: 12px"
            required=""
            name="emailInput"
          />
          <div id="emailErr" class="text-danger"></div>
        </div>
        <div>
          <label
            class="form-label"
            style="
              color: var(--bs-body-bg);
              font-family: Roboto, sans-serif;
              margin-bottom: 3px;
              margin-top: 35px;
            "
            for="badgeInput"
            >Badge</label
          ><input
            class="form-control"
            type="text"
            id="badgeInput"
            style="background: rgb(213, 214, 215)"
            name="badgeInput"
          />
          <div id="badgeErr" class="text-danger"></div>
        </div>
        <div style="text-align: center; margin-top: 60px">
          <input
            class="btn btn-primary"
            type="submit"
            style="font-family: Roboto, sans-serif"
          />
        </div>
      </form>
      <div
        style="
          text-align: center;
          margin: 29px;
          margin-top: 66px;
          margin-bottom: 0px;
        "
      >
        <a
          href="sign-up.php"
          style="
            display: block;
            font-family: Roboto, sans-serif;
            color: var(--bs-body-bg);
            margin: 0px;
            margin-bottom: 6px;
          "
          >Sign up for an account</a
        >
      </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
