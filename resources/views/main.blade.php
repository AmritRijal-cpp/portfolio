<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <header>
        <div class="container-lg">

            <nav class="navbar navbar-expand-xl p-3 px-0 fixed-top" data-bs-theme="dark">
                <div class="container-fluid px-0">
                    <a href="#" class="navbar-brand">Portfolio</a>
    
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
    
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
    
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 ">
                                <li class="nav-item align-self-center"><a class="nav-link" href="#section-information">Accomplishment</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#section-project">Projects</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#about-us">About Us</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#customer-response">Customer Perspective</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#section-contact-us">Contact Us</a></li>
                                <li class="nav-item align-self-center"><button class="btn btn-primary mt-md-2">Get Product</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="contain-fluid">
            <nav>
                <ol>
                    <li>

                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <main>
        <section class="section-information" id="section-information">
            <div class="container-lg">
                <div class="projects text-center d-flex justify-content-center flex-column">
                    <h1 class="">Projects</h1>

                    <div class="para mt-3 mb-5">
                        Our software company portfolio is a gallery of projects that transformed
                        ideas into groundbreaking solutions! View Need Technosoft's curated collection of 
                        case studies and see what we can build for you. 
                    </p>

                </div>
                <div class="achivements d-flex justify-content-between flex-column flex-md-row border fw-bold text-start">
                    <div class="achivement section-1 d-flex flex-column justify-content-between ">
                        <div class="achivement-star">
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-fill" style="color: gold;"></i>
                            <i class="bi bi-star-half" style="color: gold;"></i>
                        </div>
                        <div class="achivement-rating">
                            <h3>4.5</h3>
                            <p>Clutch Rating</p>
                        </div>
                        <div class="achivement-description">
                            <p>based on 10+ client reviews</p>
                        </div>
                    </div>
                    <div class="achivement section-2 d-flex flex-column justify-content-between">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <div class="achivement-recommend-by-cutomer">
                            <h3>99%</h3>
                            <p>of customer</p>
                        </div>
                        <p>are ready to recommend us</p>
                    </div>
                    <div class="achivement section-3 d-flex flex-column justify-content-between">
                        <div class="achivement-dev-img">
                            <i class="bi bi-person-circle"></i>
                            <i class="bi bi-person-circle"></i>
                            <i class="bi bi-person-circle"></i>
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="achivement-dev-info">
                            <h3>100%</h3>
                            <p>of developer</p>
                        </div>
                        <p>have a degree in engineering</p>
                    </div>
                    <div class="achivement section-4 d-flex flex-column justify-content-between">
                        <i class="bi bi-pc-display"></i>
                        <div class="achivement-project-number">
                            <h3>100+</h3>
                            <p>projects</p>
                        </div>
                        <p>successfully delivered</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-project" id="section-project">
            <div class="container-lg text-center">
                <div class="checkbox-filter dropdown">
                    <button class="btn btn-secondary dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </button>
                    <ul class="dropdown-menu p-2 mt-3">
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="services">
                            <label class="form-check-label" for="services">
                                <li class="dropdown-item py-0">Web Development</li>
                            </label>
                        </div>
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="services">
                            <label class="form-check-label" for="services">
                                <li class="dropdown-item py-0">Software Development</li>
                            </label>
                        </div>
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="services">
                            <label class="form-check-label" for="services">
                                <li class="dropdown-item py-0">Mobile Development</li>
                            </label>
                        </div>
                    </ul>
                </div>

                <div class="project-list flex-column flex-md-row">
                    <div class="project-info">
                        <div class="about">
                            <table class="table table-borderless">
                                <thead>
                                    <h4 class="fw-bold">Dairy Website</h4>
                                </thead><hr>
                                <tbody class="text-start">
                                    <tr class="table-color">
                                        <th>Location:</th>
                                        <td>Nepal</td>
                                    </tr>
                                    <tr class="table-color">
                                        <th>Service:</th>
                                        <td>Web Development</td>
                                    </tr>
                                    <tr class="table-color">
                                        <th>Technologies:</th>
                                        <td>React, Laravel, MySQL, AJAX</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <picture class="project-picture ">
                        <img class="img-fluid" src="https://www.shutterstock.com/shutterstock/photos/1259788099/display_1500/stock-vector-dairy-products-landing-page-website-template-vector-paper-cut-rural-landscape-cow-tractor-milk-1259788099.jpg" alt="Dairy">
                    </picture>
                </div>
            </div>
        </section>
        <section class="about-us py-5" id="about-us">
            <div class="container-lg">
                <div class="sub-section d-flex justify-content-center flex-sm-row flex-column align-items-center p-5">
                    <div class="left-side d-flex flex-column align-items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle mb-2" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <h4 class="fw-bold">Chatramann Shrestha</h4>
                        <h5 class="mb-2">CEO, Founder</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                    </div>
                    <div class="right-side d-flex flex-column">
                        <h1 class="fw-bold">Do you have a project concept?</h1>
                        <h5>Let's discuss it in detail!</h5>
                        <button class="btn btn-primary">Book a call</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-response" id="customer-response">
            <div class="container-lg">
                <h2 class="fw-bolder text-center mb-5">Customer Perspective</h2>
                <div class="row">
                    <div class="left d-flex p-4 rounded-4 col-lg-5 mx-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle mb-2" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <div class="info d-flex flex-column">
                            <h3 class="fw-bolder">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. "</h>
                            <h5 class="fw-bold">Sujan Timsina</h>
                            <h6>Founder of ABC Company</h6>
                        </div>
    
                    </div>
                    <div class="right d-flex p-4 rounded-4 col-lg-5 mx-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle mb-2 align-self-start" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <div class="info d-flex flex-column">
                            <h3 class="fw-bolder">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. "</h>
                            <h5 class="fw-bold">Aman Baruwal</h>
                            <h6>Founder of XYZ Company</h6>
                        </div>
    
                    </div>

                </div>
            </div>
        </section>
        <section class="section-contact-us" id="section-contact-us">
            <div class="container-lg">
                <div class="row p-5 rounded-5 gap mt-3">
                    <div class="left col-md-6 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-building-fill mb-5" viewBox="0 0 16 16">
                            <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                        </svg>
                        <h1 class="fw-bolder mb-3">Contact us</h1>
                        <h4 class="fw-600">Whether you’re looking to build an MVP, create a web design
                            for your site, develop a mobile app or complex IT system - 
                            tell us about your project. We will give you a quote and 
                            advice.
                        </h4>
                    </div>
                    <div class="right col-md-6 rounded-4">
                        <form action="" class="form">
                            <div class="row mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name*" aria-label="name" required>
                            </div>
                            <div class="row mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email*" aria-label="Last name" required>
                            </div>
                            <div class="row mb-3">
                                <input type="text" name="phone-number" class="form-control" placeholder="Phone Number" aria-label="phone-number">
                            </div>
                            <div class="row mb-3">
                                <textarea name="description" id="description" class="form-control" placeholder="Description*" required></textarea>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer my-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 class="fw-bold">About Us</h4>
            <p>Need Technosoft is a leading web development agency dedicated to crafting innovative and effective digital solutions for businesses.</p>
          </div>
          <div class="col-md-4">
            <h4 class="fw-bold">Services</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="nav-link">Web Design</a></li>
              <li><a href="#" class="nav-link">Web Development</a></li>
              <li><a href="#" class="nav-link">E-commerce Solutions</a></li>
              <li><a href="#" class="nav-link">SEO Services</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="fw-bold">Contact Us</h4>
            <address>
              <strong>Need Technosoft</strong><br>
              Pipal Chowk<br>
              Biratnagar, Nepal<br>
              <abbr title="Phone">P:</abbr> 9876543210
            </address>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12 text-center">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
              <li class="list-inline-item"><a href="#" class="text-light">Terms of Use</a></li>
              <li class="list-inline-item"><a href="#" class="text-light">Sitemap</a></li>
            </ul>
            <p>&copy; 2024 Need Technosoft. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>