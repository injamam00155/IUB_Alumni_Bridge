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
              <i class="fa-solid fa-calendar-check fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Events</span>
            </a>
            <a href="/admin/awards" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-trophy fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Award</span>
            </a>
            <a href="/admin/jobs" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-briefcase fs-4"></i>
              <span class="fs-5 fw-bold d-none d-xl-inline ms-2">Jobs</span>
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
              <strong class="fs-4 p-2 ms-3">Jobs</strong>
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
          <!-- <div class="row mt-4">
            <div class="col-2 col-lg-1 d-flex justify-content-end">
              <img
                src="img/profile_img.jpg"
                alt="profile img"
                class="img-fluid ms-2"
                style="width: 50px; height: 50px; border-radius: 50%"
              />
            </div>
            <div class="col-10 col-lg-11 pe-5">
              <form>
                <div class="form-group">
                  <label for="jobTitle">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="jobTitle"
                    placeholder="Enter job title"
                  />
                </div>
                <div class="form-group">
                  <label for="jobCompany">Company</label>
                  <input
                    type="text"
                    class="form-control"
                    id="jobCompany"
                    placeholder="Enter company nam"
                  />
                </div>

                <div class="form-group">
                  <label for="jobLocation">Location</label>
                  <input
                    type="text"
                    class="form-control"
                    id="jobLocation"
                    placeholder="Enter job location"
                  />
                </div>
                <div class="form-group">
                  <label for="jobDescription">Description</label>
                  <textarea
                    class="form-control"
                    id="jobDescription"
                    placeholder="Enter job description"
                    rows="3"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="eventResponsibility">Responsibility</label>
                  <textarea
                    class="form-control"
                    id="eventResponsibility"
                    placeholder="Enter job responsibility"
                    rows="3"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="eventRequiremnt">Requirement</label>
                  <textarea
                    class="form-control"
                    id="eventRequiremnt"
                    placeholder="Enter jon requirement"
                    rows="3"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="contactMail">Contact</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contactMail"
                    placeholder="Enter contact mail"
                  />
                </div>

                <button type="submit" class="btn btn-primary mt-2">
                  Submit
                </button>
              </form>
            </div>
          </div> -->
          <!-- POST section -->
          <div class="row">
            <div class="col-12">
              <!-- POST/QUERIES -->

              <!-- EVENT 1 -->

              <!-- EVENT 2 -->

              <!-- JOB OFFER 1 -->
              <div class="job_post mt-5">
                <div class="row">
                  <div class="col-2 col-lg-1 d-flex justify-content-end">
                    <img
                      src="img/profile_img2.jpg"
                      alt="profile img"
                      class="img-fluid ms-2"
                      style="width: 50px; height: 50px; border-radius: 50%"
                    />
                  </div>
                  <div class="col-10 col-lg-11 pe-5">
                    <div>
                      <h4>
                        Injamam Ul Haque<i
                          class="fa-solid fa-graduation-cap fa-sm ms-2"
                        ></i>
                      </h4>
                    </div>

                    <div class="job-post">
                      <div class="post_body fs-5">
                        <div
                          class="job-header d-flex justify-content-between mt-3"
                        >
                          <strong>Software Engineer</strong>
                          <p>Full-time</p>
                        </div>
                        <p class="company">Acme Corp</p>
                        <p class="location">San Francisco, CA</p>
                        <p class="date">Posted 2 days ago</p>
                        <hr />
                        <h4>Job Description:</h4>
                        <p>
                          We are seeking a talented software engineer to join
                          our team at Acme Corp. You will work on a variety of
                          projects and collaborate with cross-functional teams
                          to deliver high-quality software products.
                        </p>
                        <h4>Responsibilities:</h4>
                        <ul>
                          <li>Design and develop software applications</li>
                          <li>
                            Collaborate with cross-functional teams to identify
                            and solve complex problems
                          </li>
                          <li>
                            Write clean, maintainable, and well-documented code
                          </li>
                          <li>
                            Conduct code reviews and provide constructive
                            feedback to other team members
                          </li>
                        </ul>
                        <h4>Requirements:</h4>
                        <ul>
                          <li>
                            Bachelor's or Master's degree in Computer Science or
                            related field
                          </li>
                          <li>
                            Minimum of 3 years of experience in software
                            engineering
                          </li>
                          <li>
                            Proficient in at least one programming language such
                            as Java, Python, or JavaScript
                          </li>
                          <li>
                            Experience with web development frameworks such as
                            React or Angular
                          </li>
                          <li>Strong problem-solving and analytical skills</li>
                        </ul>
                        <p><strong>Email: </strong> Injamam00155@gmail.com</p>
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
              <!-- JOB OFFER 2 -->
              <div class="job_post mt-5">
                <div class="row">
                  <div class="col-2 col-lg-1 d-flex justify-content-end">
                    <img
                      src="img/profile_img3.jpg"
                      alt="profile img"
                      class="img-fluid ms-2"
                      style="width: 50px; height: 50px; border-radius: 50%"
                    />
                  </div>
                  <div class="col-10 col-lg-11 pe-5">
                    <div>
                      <h4>
                        Mushfiqur Alam Bhuiyan<i
                          class="fa-solid fa-graduation-cap fa-sm ms-2"
                        ></i>
                      </h4>
                    </div>

                    <div class="job-post">
                      <div class="post_body fs-5">
                        <div
                          class="job-header d-flex justify-content-between mt-3"
                        >
                          <strong>Front-End Developer</strong>
                          <p>Full-time</p>
                        </div>
                        <p class="company">XYZ Inc.</p>
                        <p class="location">New York, NY</p>
                        <p class="date">Posted 4 days ago</p>
                        <hr />
                        <h4>Job Description:</h4>
                        <p>
                          We are looking for a skilled front-end developer to
                          join our team at XYZ Inc. You will work on designing
                          and developing interactive user interfaces and
                          collaborate with designers, back-end developers, and
                          project managers to deliver high-quality web
                          applications.
                        </p>
                        <h4>Responsibilities:</h4>
                        <ul>
                          <li>
                            Develop and maintain user-facing features using
                            HTML, CSS, and JavaScript
                          </li>
                          <li>
                            Collaborate with cross-functional teams to identify
                            and solve complex problems
                          </li>
                          <li>
                            Optimize applications for maximum speed and
                            scalability
                          </li>
                          <li>
                            Optimize applications for maximum speed and
                            scalability
                          </li>
                          <li>
                            Stay up-to-date with emerging trends and
                            technologies in front-end development
                          </li>
                        </ul>
                        <h4>Requirements:</h4>
                        <ul>
                          <li>
                            Bachelor's or Master's degree in Computer Science or
                            related field
                          </li>
                          <li>
                            Minimum of 2 years of experience in front-end
                            development
                          </li>
                          <li>Proficient in HTML, CSS, and JavaScript</li>
                          <li>
                            Experience with modern front-end frameworks such as
                            React, Vue, or Angular
                          </li>
                          <li>Strong problem-solving and analytical skills</li>
                        </ul>
                        <p><strong>Email: </strong> mushfiqur55@gmail.com</p>
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
              <!-- JOB OFFER 3 -->
              <div class="job_post mt-5">
                <div class="row">
                  <div class="col-2 col-lg-1 d-flex justify-content-end">
                    <img
                      src="img/Akib Raihan .jpeg"
                      alt="profile img"
                      class="img-fluid ms-2"
                      style="width: 50px; height: 50px; border-radius: 50%"
                    />
                  </div>
                  <div class="col-10 col-lg-11 pe-5">
                    <div>
                      <h4>
                        Akib Raihan Popeye<i
                          class="fa-solid fa-graduation-cap fa-sm ms-2"
                        ></i>
                      </h4>
                    </div>

                    <div class="job-post">
                      <div class="post_body fs-5">
                        <div
                          class="job-header d-flex justify-content-between mt-3"
                        >
                          <strong>Data Scientist</strong>
                          <p>Full-time</p>
                        </div>
                        <p class="company">ABC Analytics</p>
                        <p class="location">Chicago, IL</p>
                        <p class="date">Posted 7 days ago</p>
                        <hr />
                        <h4>Job Description:</h4>
                        <p>
                          We are seeking a skilled data scientist to join our
                          team at ABC Analytics. You will work on developing and
                          implementing data-driven solutions to help our clients
                          make better business decisions.
                        </p>
                        <h4>Responsibilities:</h4>
                        <ul>
                          <li>
                            Collect, clean, and analyze large datasets using
                            statistical and machine learning techniques
                          </li>
                          <li>
                            Develop predictive models and algorithms to identify
                            patterns and trends in data
                          </li>
                          <li>
                            Collaborate with cross-functional teams to identify
                            business problems and opportunities
                          </li>
                          <li>
                            Communicate complex findings to technical and
                            non-technical stakeholders
                          </li>
                          <li>
                            Stay up-to-date with emerging trends and
                            technologies in data science and analytics
                          </li>
                        </ul>
                        <h4>Requirements:</h4>
                        <ul>
                          <li>
                            Bachelor's or Master's degree in Computer Science,
                            Mathematics, Statistics, or related field
                          </li>
                          <li>
                            Minimum of 3 years of experience in data science or
                            analytics
                          </li>
                          <li>
                            Proficient in statistical analysis and machine
                            learning techniques
                          </li>
                          <li>
                            Experience with programming languages such as Python
                            or R
                          </li>
                          <li>Strong problem-solving and analytical skills</li>
                        </ul>
                        <p><strong>Email: </strong> Injamam00155@gmail.com</p>
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
