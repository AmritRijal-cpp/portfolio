<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <header>
        <div class="container p-0">
            <nav class="navbar navbar-expand-xl p-3 px-0" data-bs-theme="dark">
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
                                <li class="nav-item align-self-center"><a class="nav-link" href="#">Portfolio</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#">Products</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#">About Us</a></li>
                                <li class="nav-item align-self-center"><a class="nav-link" href="#">Contact Us</a></li>
                                <li class="nav-item align-self-center"><button class="btn btn-primary">Get Product</button></li>
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
        <section class="section-information">
            <div class="container">
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
        <section class="section-project">
            <div class="container text-center">
                <div class="checkbox-filter dropdown">
                    <button class="btn btn-secondary dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </button>
                    <ul class="dropdown-menu p-2">
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
                    <div class="project-info ">
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
        <section class="about-us">
            <div class="container">
                <div class="d-flex justify-content-between flex-sm-row flex-column align-items-center">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </div>
                    <div class="founder-name ">
                        <h4>Mr. Chatramann Shrestha</h4>
                        <p>Founder and CEO of Need Technosoft</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-contact-us"></section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>