<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/iubalumnibridgelogo.png" type="image/x-icon" />
    <title>Awards</title>
    <!-- CSS -->
    <link rel="stylesheet" href={{asset('events.css')}} />
    
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

            <a href="/admin/dashboard" class="my-3 ms-4">
              <img
                src="img/iubalumnibridgelogo.png"
                alt="logo"
                class="img-responsive mt-3 logo"
              />
            </a>
            <!-- NAV LINKS -->
            <a href="/admin/dashboard" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-house fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Home</span>
            </a>

            <a href="/admin/events" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-calendar-check fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Events</span>
            </a>
            <a href="/admin/awards" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-trophy fs-4"></i>
              <span class="fs-5 fw-bold d-none d-xl-inline ms-2">Award</span>
            </a>
            <a href="/admin/jobs" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-briefcase fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Jobs</span>
            </a>
            <!-- <a href="profile.html" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-user fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Profile</span>
            </a> -->
            <a href="/admin/bookmarks" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-bookmark fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Bookmark</span>
            </a>
            <a href="/" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-right-from-bracket fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Log out</span>
            </a>

            <a
              href="#"
              class="btn profile_icon position-absolute"
              type="button"
            >
              <img
                class="img-fluid ms-2"
                src="img/IUBLogo.png"
                alt="profile img"
                style="width: 40px; border-radius: 50%"
              />
            </a>
          </div>
        </div>
        <!-- ---HOME FEED--- -->
        <div class="col-10 col-lg-8 col-xl-7 border-end">
          <div class="row align-items-center mt-3 bg-white sticky-top py-3">
            <div class="col-10 col-lg-11">
              <strong class="fs-4 p-2 ms-3">Awards</strong>
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
          <!-- What's on your mind section -->
          <div class="row mt-4">
            <div class="col-2 col-lg-1 d-flex justify-content-end">
              <img
                src="img/IUBLogo.png"
                alt="profile img"
                class="img-fluid ms-2"
                style="width: 50px; height: 50px; border-radius: 50%"
              />
            </div>
            <div class="col-10 col-lg-11 pe-5">
              <form action="{{route('create.awardPost')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                  <label for="awardTitle">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="awardTitle"
                    name="awardTitle"
                    placeholder="Enter award title"
                  />
                  @error('awardTitle') <span style="color: red;">{{$message}}</span> @enderror
                </div>

                {{-- <div class="form-group">
                  <label for="eventTime1">Time</label>
                  <input
                    type="text"
                    class="form-control"
                    id="eventTime1"
                    placeholder="Enter award time"
                  />
                </div>
                <div class="form-group">
                  <label for="eventTime2">Time</label>
                  <input
                    type="text"
                    class="form-control"
                    id="eventTime2"
                    placeholder="Enter award time"
                  />
                </div> --}}
                <div class="form-group mb-2">
                  <label for="awardDate">Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="awardDate"
                    name="awardDate"
                    placeholder="Enter award date"
                  />
                  @error('awardDate') <span style="color: red;">{{$message}}</span> @enderror
                </div>
                <div class="form-group mb-2">
                  <label for="awardLocation">Location</label>
                  <input
                    type="text"
                    class="form-control"
                    id="awardLocation"
                    name="awardLocation"
                    placeholder="Enter award location"
                  />
                  @error('awardLocation') <span style="color: red;">{{$message}}</span> @enderror
                </div>
                <div class="form-group mb-2">
                  <label for="awardDescription">Description</label>
                  <textarea
                    class="form-control"
                    id="awardDescription"
                    name="awardDescription"
                    placeholder="Enter award description"
                    rows="3"
                  ></textarea>
                  @error('awardDescription') <span style="color: red;">{{$message}}</span> @enderror
                </div>
                <div class="form-group mb-2">
                  <label for="awardPosterImage">Poster Image</label>
                  <input
                    type="file"
                    class="form-control-file"
                    id="awardPosterImage"
                    name="awardPosterImage"
                  />
                </div>
                @error('awardPosterImage') <span style="color: red;">{{$message}}</span> @enderror
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <!-- POST section -->
          <div class="row">
            <div class="col-12">
              <!-- AWARDS LIST -->
              <section class="light mt-5">
                <div class="mt-3">
                  @foreach($data as $awards)
                  <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                      <img
                        class="postcard__img"
                        src="{{asset('images/'.$awards->awardImageURL)}}"
                        alt="{{$awards->awardTitle}} poster picture"
                      />
                    </a>
                    <div class="postcard__text t-dark">
                      <h1 class="postcard__title blue ms-2">
                        <h3 href="#">
                          {{$awards->awardTitle}}
                        </h3>
                      </h1>

                      <div class="postcard__bar"></div>
                      <div class="postcard__preview-txt">
                        {{$awards->awardDescription}}
                      </div>
                    </div>
                  </article>
                  @endforeach
                </div>
              </section>
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
                href="/admin/events"
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
