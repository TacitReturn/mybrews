<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

</head>

<body class="fixed-sn homepage-v2">

<!-- Navigation -->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark stylish-color-dark">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Navbar</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">Homepages</a>

                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="../homepage/v-1.html">V1</a>

                        <a class="dropdown-item" href="../homepage/v-2.html">V2</a>

                        <a class="dropdown-item" href="../homepage/v-3.html">V3</a>

                        <a class="dropdown-item" href="../homepage/v-4.html">V4</a>

                        <a class="dropdown-item" href="../homepage/v-5.html">V5</a>

                    </div>

                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">Postpages</a>

                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="../postpage/v-1.html">V1</a>

                        <a class="dropdown-item" href="../postpage/v-2.html">V2</a>

                        <a class="dropdown-item" href="../postpage/v-3.html">V3</a>

                        <a class="dropdown-item" href="../postpage/v-4.html">V4</a>

                        <a class="dropdown-item" href="../postpage/v-5.html">V5</a>

                    </div>

                </li>

            </ul>
            <!-- Links -->

            <!-- Search form -->
            <form class="form-inline">

                <div class="md-form my-0">

                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">

                </div>

            </form>

        </div>
        <!-- Collapsible content -->

    </nav>
    <!-- Navbar -->

</header>
<!-- Navigation -->

<ul>
    @foreach($beers as $beer)
        <li>{{ $beer['nameDisplay'] }}</li>
    @endforeach
</ul>

<!-- Carousel Wrapper -->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">

        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

        <li data-target="#carousel-example-1z" data-slide-to="1"></li>

        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

    </ol>
    <!-- Indicators -->

    <!-- Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active">

            <div class="view h-100">

                <img class="d-block h-100 w-lg-100" src="{{ asset('img/beer/beer-header1.jpeg') }}"
                     style="width: 100%"
                     alt="First slide">

                <div class="mask rgba-black-light">

                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">

                        <ul class="list-unstyled animated fadeIn col-10">

                            <li>

                                <h1 class="h1-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit
                                </h1>

                            </li>

                            <li>

                                <p>Tempora incidunt ut labore et dolore veritatis et quasi architecto beatae</p>

                            </li>

                            <li>

                                <a target="_blank" href="#"
                                   class="btn btn-info" rel="nofollow">See more!</a>

                            </li>

                        </ul>

                    </div>
                    <!-- Caption -->

                </div>

            </div>

        </div>
        <!-- First slide -->

        <!-- Second slide -->
        <div class="carousel-item h-100">

            <div class="view h-100">

                <img class="d-block h-100 w-lg-100" src="{{ asset('img/beer/beer-header2.jpeg') }}"
                     style="width: 100%"
                     alt="Second slide">

                <div class="mask rgba-stylish-strong">

                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">

                        <ul class="list-unstyled animated fadeIn col-10">

                            <li>

                                <h1 class="h1-responsive font-weight-bold">Nemo enim ipsam voluptatem quia voluptas
                                    sit </h1>

                            </li>

                            <li>

                                <p>Nemo enim ipsam voluptatem quia veritatis et quasi architecto beatae</p>

                            </li>

                            <li>

                                <a target="_blank" href="#"
                                   class="btn btn-info"
                                   rel="nofollow">Read

                                    more</a>

                            </li>

                        </ul>

                    </div>
                    <!-- Caption -->

                </div>

            </div>

        </div>
        <!-- Second slide -->

        <!-- Third slide -->
        <div class="carousel-item">

            <div class="view h-100">

                <img class="d-block h-100 w-lg-100" src="{{ asset('img/beer/beer-header3.jpeg') }}"
                     style="width: 100%"
                     alt="Third slide">

                <div class="mask rgba-black-light">

                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">

                        <ul class="list-unstyled animated fadeIn col-md-12">

                            <li>

                                <h1 class="h1-responsive font-weight-bold">Sed ut perspiciatis unde omnis iste natus sit
                                    voluptatem
                                </h1>

                            </li>

                            <li>

                                <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>

                            </li>

                            <li>

                                <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/"
                                   class="btn btn-default"
                                   rel="nofollow">Read

                                    more</a>

                            </li>

                        </ul>

                    </div>
                    <!-- Caption -->

                </div>

            </div>

        </div>
        <!-- Third slide -->

    </div>
    <!-- Slides -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>

    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        <span class="sr-only">Next</span>

    </a>
    <!-- Controls -->

</div>
<!-- Carousel Wrapper -->

<!-- Main layout -->
<main>

    <div class="container-fluid">

        <!-- Magazine -->
        <div class="row mt-5">

            <!-- Main news -->
            <div class="col-xl-8 col-md-12 pl-0">

                <!-- Section: Magazine posts -->
                <section class="section extra-margins">

                    <h4 class="font-weight-bold"><strong>LATESTS NEWS</strong></h4>

                    <hr class="mr-4 red">

                    <!-- First row -->
                    <div class="row mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(49).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(33).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- First row -->

                    <!-- Second row -->
                    <div class="row  mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(113).jpg"
                                        class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(39).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>

                    <!-- Second row -->
                    <h4 class="font-weight-bold mt-5"><strong>TOP NEWS</strong></h4>

                    <hr class="mr-4 red">

                    <!-- Fourth row -->
                    <div class="row single-post mb-4 mr-3">

                        <!-- Card -->
                        <div class="card mt-4 mx-3">

                            <!-- Card image -->
                            <div class="view overlay">

                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(140).jpg"
                                     class="card-img-top"
                                     alt="sample image">

                                <a>

                                    <div class="mask rgba-white-slight"></div>

                                </a>

                            </div>
                            <!-- Card image -->

                            <!-- Social buttons -->
                            <div class="card-share">

                                <div class="social-reveal">

                                    <!-- Facebook -->
                                    <a type="button" class="btn-floating btn-fb"><i class="fab fa-facebook-f"></i></a>

                                    <!-- Twitter -->
                                    <a type="button" class="btn-floating btn-tw"><i class="fab fa-twitter"></i></a>

                                    <!-- Google -->
                                    <a type="button" class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"></i></a>

                                </div>

                                <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3"><i
                                        class="fas fa-share-alt"></i></a>

                            </div>
                            <!-- Social buttons -->

                            <!-- Card content -->
                            <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title"><strong>This is title of the news</strong></h4>

                                <hr>

                                <!-- Text -->
                                <p class="card-text font-thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam

                                    veritatis, ducimus

                                    sit nostrum magnam in provident, suscipit, tenetur, ipsam animi doloribus. Tenetur

                                    consectetur distinctio mollitia.</p>

                            </div>
                            <!-- Card content -->

                            <!-- Card footer -->
                            <div class="mdb-color lighten-3 text-center">

                                <ul class="list-unstyled list-inline font-small mt-3">

                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                    </li>

                                    <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                class="far fa-comments pr-1"></i>12</a></li>

                                    <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                class="fab fa-facebook-f pr-1">

                                            </i>21</a></li>

                                    <li class="list-inline-item"><a href="#" class="white-text"><i
                                                class="fab fa-twitter pr-1">
                                            </i>5</a></li>

                                </ul>

                            </div>
                            <!-- Card footer -->

                        </div>
                        <!-- Card -->

                    </div>

                    <!-- Fourth row -->
                    <h4 class="font-weight-bold mt-5"><strong>SPORT</strong></h4>

                    <hr class="mr-4 red">

                    <!-- Fifth row -->
                    <div class="row mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(2).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                                <!-- Card image -->
                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(1).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Fifth row -->

                    <!-- Sixth row -->
                    <div class="row  mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(4).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(3).jpg"
                                         class="card-img-top" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>

                    <!-- Sixth row -->
                    <h4 class="font-weight-bold mt-5"><strong>LIFESTYLE</strong></h4>

                    <hr class="mr-4 red">

                    <!-- Seventh row -->
                    <div class="row mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/4.jpg"
                                         class="card-img-top"
                                         alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>

                                <!-- Card content -->
                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/3.jpg"
                                         class="card-img-top"
                                         alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Seventh row -->

                    <!-- Eighth row -->
                    <div class="row  mb-4 mr-3">

                        <!-- Grid column -->
                        <div class="col-md-6 my-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/1.jpg"
                                         class="card-img-top"
                                         alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Others/images/2.jpg"
                                         class="card-img-top"
                                         alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                                        class="fas fa-chevron-right"></i></a>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the

                                        card's

                                        content.

                                    </p>

                                </div>
                                <!-- Card content -->

                                <!-- Card footer -->
                                <div class="mdb-color lighten-3 text-center">

                                    <ul class="list-unstyled list-inline font-small mt-3">

                                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock-o pr-1"></i>05/10/2015
                                        </li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="far fa-comments pr-1"></i>12</a></li>

                                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
                                                    class="fab fa-facebook-f pr-1">

                                                </i>21</a></li>

                                        <li class="list-inline-item"><a href="#" class="white-text"><i
                                                    class="fab fa-twitter pr-1">
                                                </i>5</a></li>

                                    </ul>

                                </div>
                                <!-- Card footer -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Eighth row -->

                </section>
                <!-- Section: Magazine posts -->

                <!-- Pagination dark -->
                <nav>

                    <ul class="pagination pg-dark flex-center">

                        <!-- Arrow left -->
                        <li class="page-item">

                            <a class="page-link" aria-label="Previous">

                                <span aria-hidden="true">&laquo;</span>

                                <span class="sr-only">Previous</span>

                            </a>

                        </li>

                        <!-- Numbers -->
                        <li class="page-item active"><a class="page-link">1</a></li>

                        <li class="page-item"><a class="page-link">2</a></li>

                        <li class="page-item"><a class="page-link">3</a></li>

                        <li class="page-item"><a class="page-link">4</a></li>

                        <li class="page-item"><a class="page-link">5</a></li>

                        <!-- Arrow right -->
                        <li class="page-item">

                            <a class="page-link" aria-label="Next">

                                <span aria-hidden="true">&raquo;</span>

                                <span class="sr-only">Next</span>

                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- Pagination dark grey -->

            </div>
            <!-- Main news -->

            <!-- Sidebar -->
            <div class="col-xl-4 col-md-12 widget-column mt-0">

                <!-- Section: Categories -->
                <section class="section mb-5">

                    <h4 class="font-weight-bold"><strong>CATEGORIES</strong></h4>

                    <hr class="red">

                    <ul class="list-group z-depth-1 mt-4">

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Business</a>

                            <span class="badge badge-danger badge-pill">4</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Entertainment</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Health</a>

                            <span class="badge badge-danger badge-pill">1</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Lifestyle</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Photography</a>

                            <span class="badge badge-danger badge-pill">1</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Technology</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Sport</a>

                            <span class="badge badge-danger badge-pill">5</span>

                        </li>

                    </ul>

                </section>

                <!-- Section: Categories -->
                <h4 class="font-weight-bold"><strong>POPULAR POSTS</strong></h4>

                <hr class="red mb-4">

                <!-- Popular posts -->
                <section>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-10 col-lg-6 col-xl-12 mx-auto">

                            <!-- Carousel Wrapper -->
                            <div id="carousel-example-2" class="carousel slide carousel-fade carousel-img"
                                 data-ride="carousel">

                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>

                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>

                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>

                                </ol>
                                <!-- Indicators -->

                                <!-- Slides -->
                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item active">

                                        <div class="view">

                                            <img class="d-block w-100 rounded"
                                                 src="https://mdbootstrap.com/img/Photos/Others/city2.jpg"
                                                 alt="First slide">

                                            <div class="mask rgba-black-light"></div>

                                        </div>

                                        <div class="carousel-caption">

                                            <h3 class="h3-responsive font-weight-bold">Light mask</h3>

                                            <p>First text</p>

                                        </div>

                                    </div>

                                    <div class="carousel-item">

                                        <!-- Mask color -->
                                        <div class="view">

                                            <img class="d-block w-100 rounded"
                                                 src="https://mdbootstrap.com/img/Photos/Others/city3.jpg"
                                                 alt="Second slide">

                                            <div class="mask rgba-black-light"></div>

                                        </div>

                                        <div class="carousel-caption">

                                            <h3 class="h3-responsive font-weight-bold">Strong mask</h3>

                                            <p>Secondary text</p>

                                        </div>

                                    </div>

                                    <div class="carousel-item">

                                        <!-- Mask color -->
                                        <div class="view">

                                            <img class="d-block w-100 rounded"
                                                 src="https://mdbootstrap.com/img/Photos/Others/city1.jpg"
                                                 alt="Third slide">

                                            <div class="mask rgba-black-light"></div>

                                        </div>

                                        <div class="carousel-caption">

                                            <h3 class="h3-responsive font-weight-bold">Slight mask</h3>

                                            <p>Third text</p>

                                        </div>

                                    </div>

                                </div>
                                <!-- Slides -->

                                <!-- Controls -->
                                <a class="carousel-control-prev" href="#carousel-example-2" role="button"
                                   data-slide="prev">

                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                    <span class="sr-only">Previous</span>

                                </a>

                                <a class="carousel-control-next" href="#carousel-example-2" role="button"
                                   data-slide="next">

                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                    <span class="sr-only">Next</span>

                                </a>
                                <!-- Controls -->

                            </div>
                            <!-- Carousel Wrapper -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Popular posts -->

                <!-- Section: Advertisment -->
                <section class="section mt-5">

                    <h6 class="grey-text text-center mb-3"><strong>- Advertisment -</strong></h6>

                    <!-- Jumbotron -->
                    <div class="jumbotron text-center">

                        <!-- Title -->
                        <h1 class="card-title h2-responsive mt-2"><strong>Material Design for Bootstrap</strong></h1>

                        <!-- Subtitle -->
                        <p class="blue-text mb-4 mt-5 font-weight-bold">Powerful and free Material Design UI KIT</p>

                        <!-- Text -->
                        <div class="d-flex justify-content-center">

                            <p class="card-text mb-3" style="max-width: 43rem;">Sed ut perspiciatis unde omnis iste
                                natus sit

                                voluptatem accusantium doloremque laudantium,

                                totam rem aperiam. Sed ut perspiciatis unde omnis iste natus.

                            </p>

                        </div>

                        <hr class="my-4">

                        <button type="button" class="btn btn-primary btn-sm waves-effect">Buy now <span
                                class="far fa-gem ml-1"></span></button>

                        <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Download <i
                                class="fas fa-download ml-1"></i></button>

                    </div>
                    <!-- Jumbotron -->

                </section>
                <!-- Section: Advertisment -->

                <!-- Section: Newsletter -->
                <section class="section mt-5">

                    <h4 class="font-weight-bold"><strong>NEWSLETTER</strong></h4>

                    <hr class="red mb-4">

                    <!-- Newsletter -->
                    <div class="card z-depth-1 widget-spacing mt-0">

                        <div class="card-body">

                            <!-- Header -->
                            <div class="text-center">

                                <h4>Subscribe:</h4>

                                <hr class="mt-2">

                            </div>

                            <!-- Body -->
                            <p class="font-small text-center">We'll write rarely, but only the best content.</p>

                            <!-- Body -->
                            <div class="md-form">

                                <i class="fas fa-user prefix grey-text"></i>

                                <input type="text" id="form3" class="form-control">

                                <label for="form3">Your name</label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-envelope prefix grey-text"></i>

                                <input type="text" id="form2" class="form-control">

                                <label for="form2">Your email</label>

                            </div>

                            <div class="text-center">

                                <button class="btn btn-primary">Send</button>

                            </div>

                        </div>

                    </div>

                </section>
                <!-- Section: Newsletter -->

                <!-- Section: Gallery -->
                <section class="section sidebar-imgs mb-5">

                    <h4 class="font-weight-bold"><strong>GALLERY</strong></h4>

                    <hr class="red">

                    <!-- Grid row -->
                    <div class="row">

                        <div class="col-md-12">

                            <div id="mdb-lightbox-ui"></div>

                            <div class="mdb-lightbox">

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(10).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg"
                                            class="img-fluid" alt="sample image">

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20(4).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(4).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20(51).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(51).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(49).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(49).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                                <figure class="col-md-4 px-1 py-1">

                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(15).jpg"
                                       data-size="1600x1067">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(15).jpg"
                                            class="img-fluid" alt="sample image"/>

                                    </a>

                                </figure>

                            </div>

                        </div>

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Section: Gallery -->

                <!-- Section: Featured posts -->
                <section class="section widget-content mt-5">

                    <!-- Heading -->
                    <h4 class="font-weight-bold"><strong>FEATURED POSTS</strong></h4>

                    <hr class="red mb-4">

                    <!-- Card -->
                    <div class="card card-body pb-0">

                        <div class="single-post">

                            <div class="row">

                                <div class="col-4">

                                    <!-- Image -->
                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(121).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 18/08/2017
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- First row -->

                        </div>

                        <div class="single-post">

                            <!-- Second row -->
                            <div class="row">

                                <!-- Image -->
                                <div class="col-4">

                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(30).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>
                                <!-- Image -->

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2017
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- Second row -->

                        </div>

                        <div class="single-post">

                            <!-- Third row -->
                            <div class="row">

                                <!-- Image -->
                                <div class="col-4">

                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(118).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>
                                <!-- Image -->

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 27/08/2017
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- Third row -->

                        </div>

                        <div class="single-post">

                            <!-- Fourth row -->
                            <div class="row">

                                <!-- Image -->
                                <div class="col-4">

                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(124).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>
                                <!-- Image -->

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- Fourth row -->

                        </div>

                        <div class="single-post">

                            <!-- Fifth row -->
                            <div class="row">

                                <!-- Image -->
                                <div class="col-4">

                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>
                                <!-- Image -->

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0  mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2018
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- Fifth row -->

                        </div>

                        <div class="single-post">

                            <!-- Sixth row -->
                            <div class="row">

                                <!-- Image -->
                                <div class="col-4">

                                    <div class="view overlay">

                                        <img
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(119).jpg"
                                            class="img-fluid rounded-0" alt="sample image">

                                        <a>

                                            <div class="mask waves-light"></div>

                                        </a>

                                    </div>

                                </div>
                                <!-- Image -->

                                <!-- Excerpt -->
                                <div class="col-8">

                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                    <div class="post-data">

                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 13/09/2017
                                        </p>

                                    </div>

                                </div>
                                <!-- Excerpt -->

                            </div>
                            <!-- Sixth row -->

                        </div>

                    </div>

                </section>
                <!-- Section: Featured posts -->

            </div>
            <!-- Sidebar -->

        </div>
        <!-- Magazine -->

    </div>

</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer stylish-color-dark mt-4 pt-4">

    <!-- Footer Links -->
    <div class="container-fluid">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>

                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,

                    consectetur

                    adipisicing elit.</p>

            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>

                <p>

                    <a href="#!">MDBootstrap</a>

                </p>

                <p>

                    <a href="#!">MDWordPress</a>

                </p>

                <p>

                    <a href="#!">BrandFlow</a>

                </p>

                <p>

                    <a href="#!">Bootstrap Angular</a>

                </p>

            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>

                <p>

                    <a href="#!">Your Account</a>

                </p>

                <p>

                    <a href="#!">Become an Affiliate</a>

                </p>

                <p>

                    <a href="#!">Shipping Rates</a>

                </p>

                <p>

                    <a href="#!">Help</a>

                </p>

            </div>

            <!-- Third column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mr-auto mt-3">

                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>

                <p>

                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>

                <p>

                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>

                <p>

                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

                <p>

                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <div class="row py-3 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!-- Copyright -->
                <p class="text-center text-md-left grey-text">

                    © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">
                        MDBootstrap.com

                    </a>

                </p>
                <!-- Copyright -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="social-section text-center mr-auto text-md-left">

                    <ul class="list-unstyled list-inline">

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-facebook-f"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-twitter"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-google-plus-g"></i>

                            </a>

                        </li>

                        <li class="list-inline-item">

                            <a class="btn-floating btn-sm rgba-white-slight">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                        </li>

                    </ul>

                </div>
                <!-- Social buttons -->

            </div>
            <!-- Grid column -->

        </div>

    </div>

</footer>

<!-- Footer -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<!-- Tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>

<script>
    // MDB Lightbox Init
    $(function () {

        $("#mdb-lightbox-ui").load("{{ asset('mdb-addons/mdb-lightbox-ui.html') }}");
    });

</script>

</body>

</html>
