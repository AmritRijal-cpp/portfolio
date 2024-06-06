<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Portfolio</title>
    
</head>
<body>
    <header>
        <div class="container-xxl">
            <nav class="navbar navbar-expand-xl p-3 " data-bs-theme="dark">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Portfolio</a>
    
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
    
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
    
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
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

    <div class="container-xxl">
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
        <section class="section-projects">
            <div class="container-xxl text-center">
                <div class="projects ">
                    <h1 class="">Projects</h1>
                    <p class="">
                        Our software company portfolio is a gallery of projects that transformed
                        ideas into groundbreaking solutions! View Anadea's curated collection of 
                        case studies and see what we can build for you. 
                    </p>

                </div>
                <div class="achivements d-flex justify-content-between border">
                    <div class="achivement section-1 d-flex flex-column justify-content-between">
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
                        <p>areready to recommend us</p>
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
        <section class="section about-us"></section>
        <section class="section contact-us"></section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>