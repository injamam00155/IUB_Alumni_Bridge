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
    <link rel="stylesheet" href="signup.css" />
    <link
      rel="icon"
      href="alumni/img/iubalumnibridgelogo.png"
      type="image/x-icon"
    />
    <title>Sign Up</title>
  </head>

  <body>
    <div class="container-fluid px-1 py-1 mx-auto">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
          <div class="card">
            <div class="text-center mb-4 logo">
              <img
                class="text-center"
                src="alumni/img/iubalumnibridgelogo.png"
                alt="logo"
              />
            </div>
            <form class="form-card" action="{{route('/store')}}" method="post">

              @csrf
              
              <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3" for="firstName">
                    First Name
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="text"
                    id="firstName"
                    name="firstName"
                    placeholder="Enter First Name"
                  />
                  
                </div>

                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3" for="lastName">
                    Last Name
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="text"
                    id="lastName"
                    name="lastName"
                    placeholder="Enter Last Name"
                  />

                </div>
              </div>
              <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3">
                    Email Address
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="email"
                    id="inputEmail"
                    name="inputEmail"
                    placeholder="Enter Email"
                  />
                </div>
                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3">
                    Password
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="password"
                    id="inputPassword"
                    name="inputPassword"
                    placeholder="Password"
                  />
                  
                </div>
              </div>
              <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3">
                    Student ID
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="text"
                    id="iubId"
                    name="iubId"
                    placeholder="Enter Student ID"
                  />
                </div>
                <div class="form-group col-sm-6 flex-column d-flex">
                  <label class="form-control-label px-3">
                    Confirm Password
                    <span class="text-danger"> * </span>
                  </label>
                  <input
                    type="password"
                    id="inputConfirmPassword"
                    name="inputConfirmPassword"
                    placeholder="Confirm Password"
                  />
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-sm-4">
                  <a
                    href="#"
                    class="btn btn-primary px-5"
                    style="text-decoration: none"
                  >
                    Sign Up
                  </a>
                  <!-- <button type="submit" class="btn-block btn-primary">
                                    Sign Up
                                </button> -->
                  <br />
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
