<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/iubalumnibridgelogo.png" type="image/x-icon" />
    <title>IUB Alumni Bridge</title>
    <!-- CSS -->
    <link rel="stylesheet" href={{asset('home.css')}} />
    <!-- JS -->

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

            <a href="home.html" class="my-3 ms-4">
              <img
                src="img/iubalumnibridgelogo.png"
                alt="logo"
                class="img-responsive mt-3 logo"
              />
            </a>
            <!-- NAV LINKS -->
            <a href="/alumni/dashboard" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-house fs-4"></i>
              <span class="fs-5 fw-bold d-none d-xl-inline ms-2">Home</span>
            </a>

            <a href="/alumni/events" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-calendar-check fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Events</span>
            </a>
            <a href="/alumni/awards" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-trophy fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Award</span>
            </a>
            <a href="/alumni/jobs" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-briefcase fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Jobs</span>
            </a>
            <a href="/alumni/profile" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-user fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Profile</span>
            </a>
            <a href="/alumni/bookmarks" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-bookmark fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Bookmark</span>
            </a>
            <a href="/" class="btn my-3 nav_link" type="button">
              <i class="fa-solid fa-right-from-bracket fs-5"></i>
              <span class="fs-6 d-none d-xl-inline ms-2">Log out</span>
            </a>

            <a
              href="/alumni/profile"
              class="btn profile_icon position-absolute"
              type="button"
            >
              <img
                class="img-fluid ms-2"
                src="img/profile_img2.jpg"
                alt="profile img"
                style="width: 40px; border-radius: 50%"
              />
            </a>
          </div>
        </div>
        <!-- ---HOME FEED--- -->
        <div class="col-10 col-lg-8 col-xl-7 border-end">
          <div class="row align-items-center mt-3 bg-white sticky-top py-3">
            <div class="col-5 col-lg-11">
              <strong class="fs-4 p-2 ms-3">Home</strong>
            </div>
            <div class="col-5 d-lg-none">
              <div class="mt-3">
                <input
                  type="text"
                  class="form-control search_input bg-gray rounded-pill"
                  placeholder=" Search"
                />
              </div>
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
                src="img/profile_img2.jpg"
                alt="profile img"
                class="img-fluid ms-2"
                style="width: 50px; height: 50px; border-radius: 50%"
              />
            </div>
            <div class="col-10 col-lg-11 pe-5">
                <form action="{{route('create.queryPost')}}" method='POST'>
                  @csrf
                <textarea
                  class="form-control bg-gray p-3"
                  name="postQuery"
                  placeholder="Ask a question and start a discussion..."
                  style="border-radius: 20px"
                  >
                </textarea>
                
                <button
                  id="post-btn"
                  type="submit"
                  class="btn my-2"
                  style="background-color: #015ea0; color: #fff"
                >
                  Post
                </button>
                @error('postQuery') <span style="color: red;">Empty post cannot be made</span> @enderror
              </form>
            </div>
          </div>
          <!-- POST section -->
          <div class="row">
            <div class="col-12">
              <!-- POST/QUERIES -->
              <div class="post mt-5">
                @foreach($data as $post)
                    @if($post["source"]=='query')
                        <div class="row">
                          <div class="col-2 col-lg-1 d-flex justify-content-end">
                            <img
                              src="img/Sarah_Student.jpg"
                              alt="user Display Picture"
                              class="img-fluid ms-2"
                              style="width: 50px; height: 50px; border-radius: 50%"
                            />
                          </div>
                          <div class="col-10 col-lg-11 pe-5">
                            <div>
                              <strong class="fs-5">
                                
                                {{-- //Loop through the users information  --}}
                                  {{-- @foreach()  --}}
                                {{-- //match the userEmail with the userData --}}
                                    {{-- @if()   --}}
                                {{-- //Display the Username of the matching userEmail --}}
                                Post Creator Name
                                {{-- @endif --}}
                                {{-- @break --}}
                                {{-- @endforeach --}}
                              </strong>
                            </div>
                            <p class="mt-3 fs-5 p-1 post_body">
                              {{-- Hey everyone, I'm a current student majoring in computer
                              science and I'm looking for advice on how to break into
                              the tech industry. Any Alumni in the tech field who have
                              tips or advice to share? Thanks in advance! --}}
                              {{$post["data"]->postDescription}}
                            </p>
                            <div
                              class="post-footer d-flex justify-content-between align-items-center mt-3 border-top"
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
                        {{-- //Loop through the users information  --}}
                        {{-- @foreach()  --}}
                          {{-- //match the userEmail with the CommentData userEmail--}}
                          {{-- @if()   --}}
           
                      <div class="mt-1 comments-section d-none">
                      <div>
                        <div class="row p-3" style="background-color: #F0F0F0">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  CommenterName
                                  {{-- //Display the Username of the matching userEmail --}}
                                </strong>
                              </div>
                              <p class="fs-6 p-2 post_body">
                                {{-- CommentDescription --}}
                                Networking, gaining practical experience through internships or personal projects, and staying up-to-date with the latest technologies can all help you break into the tech industry. Good luck!
                              </p> 
                            </div>
                          </div>
                      </div>
                    <div>
                      <div class="row p-3"  style="background-color: #F0F0F0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  {{-- // UserName of currentUser goes here --}}
                                  Current User Name
                                  
                                </strong>
                              </div>
                              <form action="">
                                  <div class="input-group mb-2">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="postComment"
                                      name="postComment"
                                      placeholder="Add your comment"
                                    />
                                  </div>
                                  <button type="submit" class="btn btn-primary">Comment</button>
                              </form>
                            </div>
                          </div>
                      </div>
                      </div>
                              {{-- @endif --}}
                            {{-- @continue(true) --}}
                          {{-- @endforeach --}}
                        @continue(true)
                    @endif

                    @if($post["source"]=='event')
                    <div class="event mt-5">
                      <div class="row">
                        <div class="col-2 col-lg-1 d-flex justify-content-end">
                          <img
                            src="img/IUBLogo.png"
                            alt="User Display Picture"
                            class="img-fluid ms-2"
                            style="width: 50px; height: 50px; border-radius: 50%"
                          />
                        </div>
                        <div class="col-10 col-lg-11 pe-5 fs-5">
                          <strong class="fs-5">IUB</strong>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <section class="light mt-3">
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
                                  <i class="fas fa-calendar-alt me-1"></i>March 16,
                                  2023 - March 18, 2023
      
                                  <i class="fa-solid fa-clock fa-sm ms-2 me-1"></i>
                                  11:00 AM - 6:30 PM
                                  <i
                                    class="fa-solid fa-location-dot fa-sm ms-2 me-1"
                                  ></i>
                                  Offside - Home of Football
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">
                                  Welcome to League of Engineers👷! Get ready for an
                                  action-packed tournament🏟️ filled with exciting
                                  matches and fierce competition as teams battle it
                                  out to claim the title of football champions. The
                                  tournament will take place from 16th March to 18th
                                  March at Offside from 🕚11 AM to 🕡6.30 PM. This
                                  tournament is open to all students of SETS,
                                  regardless of experience or skill level. It's a
                                  great opportunity to get active, meet new people,
                                  and have fun while showcasing your footballtalents.
                                  So what are you waiting for? Gather your friends,
                                  put together a team, register and come show us what
                                  you've got!
                                </div>
                              </div>
                            </article>
                          </section>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2 col-lg-1 d-flex justify-content-end"></div>
                        <div class="col-10 col-lg-11 pe-5">
                          <div
                            class="post-footer d-flex justify-content-between align-items-center mt-3 border-top"
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
                                            {{-- //Loop through the users information  --}}
                        {{-- @foreach()  --}}
                          {{-- //match the userEmail with the CommentData userEmail--}}
                          {{-- @if()   --}}
           
                      <div class="mt-1 comments-section d-none">
                      <div>
                        <div class="row p-3" style="background-color: #F0F0F0">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  CommenterName
                                  {{-- //Display the Username of the matching userEmail --}}
                                </strong>
                              </div>
                              <p class="fs-6 p-2 post_body">
                                {{-- CommentDescription --}}
                                Networking, gaining practical experience through internships or personal projects, and staying up-to-date with the latest technologies can all help you break into the tech industry. Good luck!
                              </p> 
                            </div>
                          </div>
                      </div>
                    <div>
                      <div class="row p-3"  style="background-color: #F0F0F0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  {{-- // UserName of currentUser goes here --}}
                                  Current User Name
                                  
                                </strong>
                              </div>
                              <form action="">
                                @csrf
                                  <div class="input-group mb-2">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="postComment"
                                      name="postComment"
                                      placeholder="Add your comment"
                                    />
                                    @error('postComment') <span style="color: red;">{{$message}}</span> @enderror
                                  </div>
                                  <button type="submit" class="btn btn-primary">Comment</button>
                              </form>
                            </div>
                          </div>
                      </div>
                      </div>
                              {{-- @endif --}}
                            {{-- @continue(true) --}}
                          {{-- @endforeach --}}
                      @continue(true)
                    @endif
                    
                    @if($post["source"]=='job')
                    <div class="job_post mt-5">
                      <div class="row">
                        <div class="col-2 col-lg-1 d-flex justify-content-end">
                          <img
                            src="img/profile_img2.jpg"
                            alt="User profile picture"
                            class="img-fluid ms-2"
                            style="width: 50px; height: 50px; border-radius: 50%"
                          />
                        </div>
                        <div class="col-10 col-lg-11 pe-5 fs-5">
                          <div>
                            <h4>
                              <strong class="fs-5">
                                                                {{-- //Loop through the users information  --}}
                                  {{-- @foreach()  --}}
                                {{-- //match the userEmail with the userData --}}
                                    {{-- @if()   --}}
                                {{-- //Display the Username of the matching userEmail --}}
                                Post Creator Name
                                {{-- @endif --}}
                                {{-- @break --}}
                                {{-- @endforeach --}}
                              </strong>
                              <i class="fa-solid fa-graduation-cap fa-sm"></i>
                            </h4>
                          </div>
      
                          <div class="job-post">
                            <div class="post_body">
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
                              <h5>Job Description:</h5>
                              <p>
                                We are seeking a talented software engineer to join
                                our team at Acme Corp. You will work on a variety of
                                projects and collaborate with cross-functional teams
                                to deliver high-quality software products.
                              </p>
                              <h5>Responsibilities:</h5>
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
                              <h5>Requirements:</h5>
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
                        </div>
                        <div class="row pb-5">
                          <div
                            class="col-2 col-lg-1 d-flex justify-content-end"
                          ></div>
                          <div class="col-10 col-lg-11 pe-5">
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
                                            {{-- //Loop through the users information  --}}
                        {{-- @foreach()  --}}
                          {{-- //match the userEmail with the CommentData userEmail--}}
                          {{-- @if()   --}}
           
                      <div class="mt-1 comments-section d-none">
                      <div>
                        <div class="row p-3" style="background-color: #F0F0F0">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  CommenterName
                                  {{-- //Display the Username of the matching userEmail --}}
                                </strong>
                              </div>
                              <p class="fs-6 p-2 post_body">
                                {{-- CommentDescription --}}
                                Networking, gaining practical experience through internships or personal projects, and staying up-to-date with the latest technologies can all help you break into the tech industry. Good luck!
                              </p> 
                            </div>
                          </div>
                      </div>
                    <div>
                      <div class="row p-3"  style="background-color: #F0F0F0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  {{-- // UserName of currentUser goes here --}}
                                  Current User Name
                                  
                                </strong>
                              </div>
                              <form action="">
                                  <div class="input-group mb-2">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="postComment"
                                      name="postComment"
                                      placeholder="Add your comment"
                                    />
                                  </div>
                                  <button type="submit" class="btn btn-primary">Comment</button>
                              </form>
                            </div>
                          </div>
                      </div>
                      </div>
                              {{-- @endif --}}
                            {{-- @continue(true) --}}
                          {{-- @endforeach --}}
                    @continue(true)
                    @endif
                    @if($post["source"]=='award')
                    <div class="mt-3">
                      <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                          <img
                            class="postcard__img"
                            src="img/technocrats.jpg"
                            alt="Technocrats Winner Post"
                          />
                        </a>
                        <div class="postcard__text t-dark">
                          <h1 class="postcard__title blue ms-2">
                            <h3 href="#">
                              Champion of National Innovation Competition
                            </h3>
                          </h1>
    
                          <div class="postcard__bar"></div>
                          <div class="postcard__preview-txt">
                            On 15th March 2023, the IUB CSE department participated
                            in the Technocrats V.1 National Innovation Competition,
                            hosted by IUBAT. Students from various Colleges,
                            Polytechnics and Universities came together to showcase
                            their innovative ideas and compete against each other.
                            This year total 117 teams participated in different
                            segments of this event.
                          </div>
                        </div>
                      </article>
                      <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                          <img
                            class="postcard__img"
                            src="img/programming contest.jpg"
                            alt="National Programming Contest Post"
                          />
                        </a>
                        <div class="postcard__text t-dark">
                          <h1 class="postcard__title blue ms-2">
                            <h3 href="#">
                              25th place at National Photography Competition
                            </h3>
                          </h1>
    
                          <div class="postcard__bar"></div>
                          <div class="postcard__preview-txt">
                            IUB achieved 25th place in the National Girls'
                            Programming Contest! Congratulations to Fatema Tuj
                            Johora, Zaara Rahman and Tausia Tahsin!
                          </div>
                        </div>
                      </article>
                      <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                          <img
                            class="postcard__img"
                            src="img/Gold medal.jpg"
                            alt="Inter University Gold Medal at Table Tennis"
                          />
                        </a>
                        <div class="postcard__text t-dark">
                          <h1 class="postcard__title blue ms-2">
                            <h3 href="#">
                              Gold in Table Tennis at Bangabandhu Inter University
                              Sports Championship
                            </h3>
                          </h1>
    
                          <div class="postcard__bar"></div>
                          <div class="postcard__preview-txt">
                            IUB students have won gold in the mixed doubles table
                            tennis event beating Jagannath University in straight
                            sets in the ongoing Bangabandhu Inter-University Sports
                            Championship.
                            <br />
                            The IUB mixed doubles team comprised Sharmin Islam
                            Shroddha, student of Computer Science and Engineering,
                            and Md. Rifat Mahmud Sabbir, student of Human Resources
                            Management. The final match was held at the Ashulia
                            campus of Daffodil International University on Saturday,
                            September 17, 2022.
                          </div>
                        </div>
                      </article>
                    </div>
                        {{-- //Loop through the users information  --}}
                        {{-- @foreach()  --}}
                          {{-- //match the userEmail with the CommentData userEmail--}}
                          {{-- @if()   --}}
           
                      <div class="mt-1 comments-section d-none">
                      <div>
                        <div class="row p-3" style="background-color: #F0F0F0">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  CommenterName
                                  {{-- //Display the Username of the matching userEmail --}}
                                </strong>
                              </div>
                              <p class="fs-6 p-2 post_body">
                                {{-- CommentDescription --}}
                                Networking, gaining practical experience through internships or personal projects, and staying up-to-date with the latest technologies can all help you break into the tech industry. Good luck!
                              </p> 
                            </div>
                          </div>
                      </div>
                    <div>
                      <div class="row p-3"  style="background-color: #F0F0F0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px">
                            <div class="col-2 col-lg-1 d-flex justify-content-end">
                              <img
                                src="img/Sarah_Student.jpg"
                                alt="user Display Picture"
                                class="img-fluid ms-2"
                                style="width: 30px; height: 30px; border-radius: 50%"
                              />
                            </div>
                            <div class="col-10 col-lg-11 pe-5">
                              <div>
                                <strong class="fs-6">
                                  {{-- // UserName of currentUser goes here --}}
                                  Current User Name
                                  
                                </strong>
                              </div>
                              <form action="">
                                  <div class="input-group mb-2">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="postComment"
                                      name="postComment"
                                      placeholder="Add your comment"
                                    />
                                  </div>
                                  <button type="submit" class="btn btn-primary">Comment</button>
                              </form>
                            </div>
                          </div>
                      </div>
                      </div>
                              {{-- @endif --}}
                            {{-- @continue(true) --}}
                          {{-- @endforeach --}}
                    @continue(true)
                    @endif
                @endforeach
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
                href="/alumni/events"
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
    <script src="app.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src={{asset('js/app.js')}}></script> 
  </body>
</html>
