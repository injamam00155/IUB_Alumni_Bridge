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
    <link rel="stylesheet" href="{{asset('index.css')}}" />
    <link
      rel="icon"
      href="{{asset('alumni/img/iubalumnibridgelogo.png')}}"
      type="image/x-icon"
    />
    <title>IUB Alumni Bridge</title>
    <script>
      // Function to hide the div after 5 seconds
      function hideDiv() {
        var div = document.getElementById("alert-div");
        div.style.display = "none";
      }
      window.onload = function() {
        setTimeout(hideDiv, 4000);
      };
    </script>
  </head>
  
  <body>
    
    <div class="container">
      <div class="card">
        <img src="alumni/img/alumni.jpg" class="card-img-top" alt="Alumni" />
        <div class="card-img-overlay description">
          <h3 class="text-left">IUB Alumni Bridge</h3>
          <p class="text-left">
            The IUB Alumni Bridge is a social media platform that connects
            alumni of Independent University, Bangladesh (IUB) with current
            students and the university community. It provides alumni with
            updates about events and job opportunities, while allowing students
            to connect with alumni and receive mentorship and guidance.
          </p>
        </div>
        <div class="card-body">
          <div class="text-center logo">
            <img
              class="text-center"
              src="alumni/img/iubalumnibridgelogo.png"
              alt="logo"
            />
          </div>
          <br />
          <form id="loginForm" action="alumni/home.html" method="post">
            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                placeholder="Enter email"
              />
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input
                type="password"
                class="form-control"
                id="inputPassword"
                placeholder="Password"
              />
            </div>
            <div class="d-flex">
              <div class="p-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="check" />
                  <label class="form-check-label" for="check">
                    Remember Me</label>
                </div>
              </div>
              <div class="ml-auto p-2">
                <a href="/forgotPassword">Forgot Password?</a>
              </div>
            </div>
            <div class="text-center">
              <a
                href=""
                class="btn btn-primary px-5"
                style="text-decoration: none"
                id="submit"
                onclick="login()"
              >
                Log In
              </a>
              <!-- <button type="submit" class="btn btn-primary text-center">Log In</button> -->
              <br />
              <br />
              <p>Need an account?<a href="/signup">Sign Up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    

    @if(session('msg'))
      <div class="alert alert-success" id="alert-div" role="alert">{{session('msg')}}</div>
    @endif

    <script src="index.js"></script>
  </body>
</html>