<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="forgotPassword.css" />
    <link rel="icon" href="{{asset('images/iubalumnibridgelogo.png')}}" type="image/x-icon" />
    <title>Forgot Password</title>
  </head>

  <body>
    <div class="container-fluid px-1 py-5 mx-auto">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-8 text-center">
          <div class="card">
            <div class="text-center mb-4 logo">
              <img
                class="text-center"
                src="{{asset('images/iubalumnibridgelogo.png')}}"
                alt="logo"
              />
              <br />
              <br />
              <h3><strong>Reset Your Password</strong></h3>
            </div>
            <form class="form-card">
              <div class="row justify-content-center text-left">
                <div class="form-group col-sm-8 flex-column d-flex">
                  <label class="form-control-label px-2">
                    Please enter your email address to send a verification code.
                    <!-- <span class="text-danger">
                                        *
                                    </span> -->
                  </label>
                  <input
                    type="text"
                    id="inputEmail"
                    name="inputEmail"
                    placeholder="Enter Email Address"
                  />
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-6">
                  <a
                    href="confirmPassword"
                    class="btn btn-primary px-5"
                    style="text-decoration: none"
                  >
                    Send Code
                  </a>
                  <br />
                  <a href="/">Back to login</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
