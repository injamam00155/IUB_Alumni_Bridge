<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/iubalumnibridgelogo.png" type="image/x-icon" />
    <title>Events</title>
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
  </head>
  <body>
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
              <i class="fa-solid fa-calendar-check fs-4"></i>
              <span class="fs-5 fw-bold d-none d-xl-inline ms-2">Events</span>
            </a>
            <a href="/admin/awards" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-trophy fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Award</span>
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
              <strong class="fs-4 p-2 ms-3">Events</strong>
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
                        alt="User Display Picture"
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
                  <li><hr class="dropdown-divider" /></li>
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
              <form>
                <div class="form-group mb-2">
                  <label for="eventTitle">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="eventTitle"
                    placeholder="Enter event title"
                  />
                </div>
                <div class="form-group mb-2">
                  <label for="StartEventTime">Event Start Time</label>
                  {{-- <input
                    type="time"
                    class="form-control"
                    id="StartEventTime"
                    name="StartEventTime"
                    placeholder="Enter event start time"
                  /> --}}
                  <input type="time" name="event_start" id="event_start" class="form-control">
                </div>
                <div class="form-group mb-2">
                  <label for="endEventTime">Event End Time</label>
                  {{-- <input
                    type="text"
                    class="form-control"
                    id="endEventTime"
                    name="endEventTime"
                    placeholder="Enter event end time"
                  /> --}}
                  <input type="time" name="event_start" id="event_start" class="form-control">
                </div>
                <div class="form-group mb-2">
                  <label for="startEventDate">Event Start Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="startEventDate"
                    name="startEventDate"
                    placeholder="Enter event start date"
                  />
                </div>
                <div class="form-group mb-2">
                  <label for="endEventDate">Event End Date</label>
                  <input
                    type="date"
                    class="form-control"
                    id="endEventDate"
                    name="endEventDate"
                    placeholder="Enter event end date"
                  />
                </div>
                <div class="form-group mb-2">
                  <label for="eventLocation">Location</label>
                  <input
                    type="text"
                    class="form-control"
                    id="eventLocation"
                    placeholder="Enter event location"
                  />
                </div>
                <div class="form-group mb-2">
                  <label for="eventDescription">Description</label>
                  <textarea
                    class="form-control"
                    id="eventDescription"
                    name="eventDescription"
                    placeholder="Enter event description"
                    rows="3"
                  ></textarea>
                </div>
                <div class="form-group mb-2">
                  <label for="EventPosterImage">Poster Image</label>
                  <input
                    type="file"
                    class="form-control-file"
                    id="EventPosterImage"
                    name="EventPosterImage"
                  />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <!-- POST section -->
          <div class="row">
            <div class="col-12">
              <!-- EVENTS LIST -->
              <section class="light mt-5">
                <div class="mt-3">
                  <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                      <img
                        class="postcard__img"
                        src="img/event1.jpg"
                        alt="League of Enghineers poster picture"
                      />
                    </a>
                    <div class="postcard__text t-dark">
                      <h1 class="postcard__title blue ms-2">
                        <h3 href="#" class="ms-1">
                          League of Engineers - Season 1
                        </h3>
                      </h1>
                      <div class="postcard__subtitle small">
                        <i class="fas fa-calendar-alt me-1"></i>March 16, 2023 -
                        March 18, 2023

                        <i class="fa-solid fa-clock fa-sm ms-2 me-1"></i>
                        11:00 AM - 6:30 PM
                        <i class="fa-solid fa-location-dot fa-sm ms-2 me-1"></i>
                        Offside - Home of Football
                      </div>
                      <div class="postcard__bar"></div>
                      <div class="postcard__preview-txt">
                        Welcome to League of Engineers👷! Get ready for an
                        action-packed tournament🏟️ filled with exciting matches
                        and fierce competition as teams battle it out to claim
                        the title of football champions. The tournament will
                        take place from 16th March to 18th March at Offside from
                        🕚11 AM to 🕡6.30 PM. This tournament is open to all
                        students of SETS, regardless of experience or skill
                        level. It's a great opportunity to get active, meet new
                        people, and have fun while showcasing your
                        footballtalents. So what are you waiting for? Gather
                        your friends, put together a team, register and come
                        show us what you've got!
                      </div>
                    </div>
                  </article>
                  <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                      <img
                        class="postcard__img"
                        src="img/Career_Fair_2023.jpg"
                        alt="Career and Networking Day 2023 Poster"
                      />
                    </a>
                    <div class="postcard__text t-dark">
                      <h1 class="postcard__title blue ms-2">
                        <h3 href="#" class="ms-1">
                          Career and Networking Day 2023
                        </h3>
                      </h1>
                      <div class="postcard__subtitle small">
                        <i class="fas fa-calendar-alt me-1"></i>February 08,
                        2023

                        <i class="fa-solid fa-clock fa-sm ms-2 me-1"></i>
                        10:00 AM - 4:00 PM
                        <i class="fa-solid fa-location-dot fa-sm ms-2 me-1"></i>
                        Independent University, Bangladesh
                      </div>
                      <div class="postcard__bar"></div>
                      <div class="postcard__preview-txt">
                        Our annual Career Fair is back and bigger than ever!
                        This event is a great opportunity for Alumni and current
                        students to meet with top employers from various
                        industries. Dress to impress and bring plenty of copies
                        of your resume. Don't miss out on this chance to
                        kick-start your career!
                      </div>
                    </div>
                  </article>
                  <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                      <img
                        class="postcard__img"
                        src="img/SETS Fest 2022.png"
                        alt="SETS Fest 2022 Poster"
                      />
                    </a>
                    <div class="postcard__text t-dark">
                      <h1 class="postcard__title blue ms-2">
                        <h3 href="#" class="ms-2">SETS Fest 2022</h3>
                      </h1>
                      <div class="postcard__subtitle small">
                        <i class="fas fa-calendar-alt me-1"></i>March 30, 2022 -
                        March 31, 2022

                        <i class="fa-solid fa-clock fa-sm ms-2 me-1"></i>
                        11:00 AM - 5:00 PM
                        <i class="fa-solid fa-location-dot fa-sm ms-2 me-1"></i>
                        Independent University, Bangladesh
                      </div>
                      <div class="postcard__bar"></div>
                      <div class="postcard__preview-txt">
                        As we emerge from the pandemic and fully reopen our
                        doors, we are planning to go big with “ SETSFest 2022”,
                        a grand reopening celebration marking the start of a new
                        era. <br />
                        With the initiative by School of Engineering, Technology
                        and Sciences (SETS) and combined efforts of the
                        versatile clubs namely “IUB ACM Student Chapter”,
                        “JUKTI- The Official Club of CSE”, “IEEE Computer
                        Society IUB Student Branch Chapter”, and “IEEE IUB
                        Student Branch”, the School of Engineering, Technology
                        and Sciences (SETS) aims to welcome and reintroduce
                        themselves with our returning and new students joining
                        the campus for the first time in 2 years. This event
                        aims to bridge that gap for the new recruits, bring
                        together all SETS students under one roof to enjoy their
                        time together while being relieved of academic strain
                        for one day through Gaming Segments, Cultural Show, and
                        speeches from our Guest Speakers. <br />
                        SETS cordially invites you to attend and participate in
                        this delightful event, which will be remembered for
                        years to come.
                      </div>
                    </div>
                  </article>
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
            <div class="mt-5">
              <h3 class="upcoming">Upcoming Events</h3>
              <div class="row g-4 mt-3">
                <div class="col-12">
                  <a href="event-details.html" style="text-decoration: none">
                    <div class="card h-100 w-75 border-0">
                      <img
                        src="img/TechFest2023.jpg"
                        class="card-img-top"
                        alt="Tech Fest 2023 poster"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Tech Fest Spring 2023</h5>
                        <p class="card-text">
                          Event Date:
                          <span class="text-muted"
                            >April 05, 2023 - April 06, 2023</span
                          >
                        </p>
                        <p class="card-text">
                          Event Time:
                          <span class="text-muted">10:00 AM - 3:00 PM</span>
                        </p>
                        <p class="card-text">
                          Event Location:
                          <span class="text-muted"
                            >Independent University, Bangladesh</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
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
