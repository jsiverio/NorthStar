<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <title>PolarisProject8-2023</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/Roboto.css" rel="stylesheet" />
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
          height="86"
          src="assets/img/Polaris%20logo%20White.svg"
          style="margin: 0px"
          width="268"
        />
      </div>
      <form
        class="needs-validation"
        id="signinForm"
        method="post"
        novalidate
        style="
          padding-top: 32px;
          padding-right: 35px;
          padding-left: 35px;
          margin-top: 40px;
        "
        target="_self"
      >
        <div id="divUsername">
          <label
            class="form-label"
            for="emailInput"
            style="
              color: var(--bs-body-bg);
              font-family: Roboto, sans-serif;
              margin-bottom: 3px;
            "
            >Email</label
          ><input
            class="form-control"
            id="emailInput"
            required
            style="background: rgb(213, 214, 215); padding-right: 12px"
            type="email"
        /><div id ="emailErr"
               class = "valid-feedback">
            Invalid input
          </div>
        </div>
        <div id="divPassword">
          <label
            class="form-label"
            for="passwordInput"
            style="
              color: var(--bs-body-bg);
              font-family: Roboto, sans-serif;
              margin-bottom: 3px;
              margin-top: 35px;
            "
            >Password</label
          ><input
            id = "passwordInput"
            class="form-control"
            style="background: rgb(213, 214, 215)"
            type="password"
        />
        </div>
        <div style="text-align: center; margin-top: 60px">
          <input
            class="btn btn-primary"
            style="font-family: Roboto, sans-serif"
            type="submit"
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
          href="#"
          style="
            display: block;
            font-family: Roboto, sans-serif;
            color: var(--bs-body-bg);
            margin: 0px;
            margin-bottom: 6px;
          "
          >Sign up for an account</a
        ><a
          href="#"
          style="
            display: block;
            color: var(--bs-body-bg);
            font-family: Roboto, sans-serif;
            margin: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
          "
          >Forgot your password?</a
        >
      </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/loginval.js" defer></script>
  </body>
</html>
