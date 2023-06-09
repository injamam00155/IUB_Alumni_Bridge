<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/iubalumnibridgelogo.png" type="image/x-icon" />
    <title>Jobs</title>
    <!-- CSS -->
    <link rel="stylesheet" href={{asset('home.css')}} />
    <!-- BOOTSTRAP CS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- FONT AWESOME -->
    <script
      src="https://kit.fontawesome.com/6f6e8e1141.js"
      crossorigin="anonymous"
    ></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Poppins:wght@400;500;600&family=Trispace&display=swap"
      rel="stylesheet"
    />
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
    @if(session('msg'))
    <div class="alert alert-success" id="alert-div" role="alert">{{session('msg')}}</div>
    @endif
    <div class="container-fluid">
      <div class="row">
        <!-- ---NAVBAR--- -->
        <div class="col-2 col-lg-1 col-xl-2 border-end" id="navbar">
          <div
            class="left_nav d-flex flex-column position-sticky align-items-center align-items-end align-items-xl-start"
          >
            <!-- LOGO -->

            <a href="/currentStudent/dashboard" class="my-3 ms-4">
              <img
                src="{{asset('images\iubalumnibridgelogo.png')}}"
                alt="logo"
                class="img-responsive mt-3 logo"
              />
            </a>
            <!-- NAV LINKS -->
            <a href="/currentStudent/dashboard" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-house fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Home</span>
            </a>

            <a href="/currentStudent/events" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-calendar-check fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Events</span>
            </a>
            <a href="/currentStudent/awards" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-trophy fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Award</span>
            </a>
            <a href="/currentStudent/jobs" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-briefcase fs-4"></i>
              <span class="fs-5 fw-bold d-none d-xl-inline ms-2">Jobs</span>
            </a>
            <a href="/currentStudent/profile" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-user fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Profile</span>
            </a>
            <a href="/currentStudent/bookmarks" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-bookmark fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Bookmark</span>
            </a>
            <a href="/" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-right-from-bracket fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Log out</span>
            </a>

            <a
              href="/currentStudent/profile"
              class="btn profile_icon position-absolute"
              type="button"
            >
            @foreach($allStudent as $student)
                @if($student->userEmail==session('userEmail'))
                  <img
                    src="{{asset('images/'.$student->profilePictureURL)}}"
                    class="img-fluid ms-2"
                    alt="profile img"
                    style="width: 40px; border-radius: 50%"
                />
                @break
                @else 
                <img
                    src="{{asset('images/defaultDisplayPicture.jpg')}}"
                    class="img-fluid ms-2"
                    alt="profile img"
                    style="width: 40px; border-radius: 50%"
                />
              
                @endif
                @break
              @endforeach
            </a>
          </div>
        </div>
        <!-- ---HOME FEED--- -->
        <div class="col-10 col-lg-8 col-xl-7 border-end">
          <div class="row align-items-center mt-3 bg-white sticky-top py-3">
            <div class="col-10 col-lg-11">
              <strong class="fs-4 p-2 ms-5">Jobs</strong>
            </div>
            <!-- NOTIFICATION -->
            <div class="col-2 col-lg-1">
              <div class="dropdown">
                <button
                  class="btn"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-xl"></i>
                </button>
                <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="dropdownMenuButton1"
                >
                  <li class="my-3">
                    <a class="dropdown-item" href="#">
                      <img
                        src="img/profile_img.jpg"
                        alt="User Image"
                        class="img-fluid me-2"
                        style="width: 40px; border-radius: 50%"
                      />
                      <span class="notification-text"
                        ><strong>Shabab</strong> commented on your post
                        <span class="text-muted ms-5">2m ago</span></span
                      >
                    </a>
                  </li>
                  <li class="my-3">
                    <a class="dropdown-item" href="#">
                      <img
                        src="img/profile_img2.jpg"
                        alt="User Image"
                        class="img-fluid me-2"
                        style="width: 40px; border-radius: 50%"
                      />
                      <span class="notification-text"
                        ><strong>Injamam</strong> commented on your post<span
                          class="text-muted ms-5"
                          >5m ago</span
                        ></span
                      >
                    </a>
                  </li>
                  <li class="my-3">
                    <a class="dropdown-item" href="#">
                      <img
                        src="img/profile_img3.jpg"
                        alt="User Image"
                        class="img-fluid me-2"
                        style="width: 40px; border-radius: 50%"
                      />
                      <span class="notification-text"
                        ><strong>Mushfiqur</strong> commented on your post<span
                          class="text-muted ms-5"
                          >10m ago</span
                        ></span
                      >
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">See all notifications</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- POST section -->
          <div class="row">
            <div class="col-12">

              <!-- JOB OFFERS -->
              @foreach($data as $job)
              <div class="job_post mt-5">
                <div class="row">
                  <div class="col-2 col-lg-1 d-flex justify-content-end">
                    @foreach($studentPosts as $studentPost)
                        @if($studentPost->postID==$job->postID)
                            <img
                            src="{{asset('images/'.$studentPost->profilePictureURL)}}"
                            alt="user Display Picture"
                            class="img-fluid ms-2"
                            style="width: 50px; height: 50px; border-radius: 50%"
                            />                                        
                        @break
                        @endif
                      @endforeach
                  </div>
                  <div class="col-10 col-lg-11 pe-5">
                    <div>
                      <h4>
                        @foreach($studentPosts as $studentPost)
                          @if($studentPost->postID==$job->postID)
                              {{$studentPost->fullName}}
                            @break
                          @endif
                        @endforeach
                        <i
                          class="fa-solid fa-graduation-cap fa-sm ms-2"
                        ></i>
                      </h4>
                    </div>

                    <div class="job-post">
                      <div class="post_body fs-5">
                        <div
                          class="job-header d-flex justify-content-between mt-3"
                        >
                          <strong>{{ $job->jobTitle }}</strong>
                          <p>Full-time</p>
                        </div>
                        <p class="company">{{ $job->companyName }}</p>
                        <p class="location">{{ $job->location }}</p>
                        <hr />
                        <h4>Job Description:</h4>
                        <p>
                          {{ $job->jobDescription }}
                        </p>
                        <h4>Responsibilities:</h4>
                        @php
                        $delimiter = "-";
                        $string = "$job->responsibility";
                        $result = explode($delimiter, $string);
                      
                        @endphp
                        <ul>
                          @foreach ($result as $index => $substring)
                            @if ($index == 0)
                              @continue
                            @endif
                            <li>{{ $substring }}</li>
                          @endforeach
                        </ul>
                        <h4>Requirements:</h4>
                        @php
                        $delimiter = "-";
                        $string = "$job->requirement";
                        $result = explode($delimiter, $string);
                        @endphp
                        <ul>
                          @foreach ($result as $index => $substring)
                            @if ($index == 0)
                              @continue
                            @endif
                            <li>{{ $substring }}</li>
                          @endforeach
                        </ul>
                        <p><strong>Email: </strong> {{ $job->contactEmail }}</p>
                      </div>
                    </div>
                    <div
                      class="post-footer d-flex justify-content-between align-items-center border-top"
                    >
                      <div class="d-flex">
                        <button class="btn border-0 btn me-3">
                          <i class="far fa-comment me-1"></i>Comment
                        </button>
                        <button
                          class="btn border-0 btn bookmark-btn"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Bookmark"
                        >
                          <i class="far fa-bookmark me-1"></i>
                          Bookmark
                        </button>
                      </div>
                      <a href="#" style="text-decoration: none">
                        <small class="text-muted">3 comments</small>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- UPCOMMING EVENTS SECTION -->
        <div
          class="col-lg-3 mt-4 d-none d-lg-block d-flex justify-content-center"
        >
          <div class="position-sticky ms-4" style="top: 0px">
            <!-- SEARCH -->
            <div class="pt-3">
              <input
                type="text"
                class="form-control search_input bg-gray rounded-pill"
                placeholder=" Search"
              />
            </div>
            <!-- UPCOMING EVENTS -->
            @if($upcoming == null)
            <h3 class="upcoming">No Upcoming Events</h3>                  
            @else
            <div class="mt-5">
              <h3 class="upcoming">Upcoming Events</h3>
              <div class="row g-4 mt-3">
                <div class="col-12">
                  <a href="event-details.html" style="text-decoration: none">
                    <div class="card h-100 w-75 border-0">
                      <img
                        src="{{asset('images/'.$upcoming->eventImageURL)}}"
                        class="card-img-top"
                        alt="{{$upcoming->eventTitle}} poster"
                      />
                      <div class="card-body">
                        <h5 class="card-title">{{$upcoming->eventTitle}}</h5>
                        <p class="card-text">
                          Event Date:
                          <span class="text-muted"
                            >{{$upcoming->eventStartDate}} - {{$upcoming->eventEndDate}}</span
                          >
                        </p>
                        <p class="card-text">
                          Event Time:
                          <span class="text-muted">{{$upcoming->eventStartTime}} - {{$upcoming->eventEndTime}}</span>
                        </p>
                        <p class="card-text">
                          Event Location:
                          <span class="text-muted"
                            >{{$upcoming->eventLocation}}</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            @endif
            <div class="p-3 d-flex justify-content-end me-5">
              <a
                href="/currentStudent/events"
                style="color: black"
                class="btn btn-outline-primary me-5"
                >View all events</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BOOTSTRAP JS -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src={{asset('js/app.js')}}></script> 
  </body>
</html>
