<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bloggy - Personal Blog Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg" alt="Image">
                <h1 class="font-weight-bold">Akinyosoye Oluwatobiloba</h1>
                <p class="mb-4">
                    Hi, I am a Fullstack and Blockchain Developer.This is just a small BLOG RESTFUL Api created on demand.
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" href="https://twitter.com/AkinyosoyeTobi"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="https://web.facebook.com/godwin.tobi.39"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="https://www.linkedin.com/in/oluwatobiloba-akinyosoye/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="https://www.instagram.com/godwin_tobi_1/"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="https://www.linkedin.com/in/oluwatobiloba-akinyosoye/" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me Here!</a>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>
        <div class="content">
            <!-- Navbar Start -->
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                    <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="col-sm-6 text-center text-md-left">
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">My Blog</h1>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                            <h4 class="m-0 text-white px-2">/</h4>
                            <h4 class="m-0 text-white">My Blog</h4>
                        </div>
                    </div>
                </div>
            </div>
                    <a href="{{   url('/create') }}">
                        <button class="btn btn-success">Create a blog</button>
                    </a>
            <!-- Page Header End -->
            @foreach ($blogs as $blog)


                <!-- Blog List Start -->
                <div class="container bg-white pt-5">
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img mb-4 mb-md-0" width="30px" height="10px" src="{{ $blog->image }}" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{ $blog->title }}</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 2022-12-19 </small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> software</small>
                                {{--  @foreach ($comment as $item)  --}}

                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 0 Comments</small>
                                {{--  @endforeach  --}}

                            </div>
                            <p>
                                {{ $blog->description }}
                            </p>
                        <a href="{{   url('/edit',$blog->id) }}">
                            <button class="btn btn-success">Update blog</button>
                        </a>
                        <a href="{{   url('/delete',$blog->id) }}">
                            <button class="btn btn-danger">Delete blog</button>
                        </a>
                            <a class="btn btn-link p-0" href="{{  url('/create')  }}">Create More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>


                </div>
                <div class="row px-3 pb-5">
                    <nav aria-label="Page navigation">
                          <ul class="pagination m-0 mx-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                </div>
                <!-- Blog List End -->


                @endforeach
                <!-- Footer Start -->
                <div class="container py-4 bg-secondary text-center">
                    <p class="m-0 text-white">
                        &copy; <a class="text-white font-weight-bold" href="#">RESTFUL Blog Api</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="">Akinyosoye Oluwatobiloba</a>
                    </p>
                </div>
                <!-- Footer End -->
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
