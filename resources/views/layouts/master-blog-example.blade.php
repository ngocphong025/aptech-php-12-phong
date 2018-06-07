<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex flex-row">
            <div class="col-4 d-flex justify-content-start align-items-center p-0">
                <a class="text-muted" href="#">Subscribe</a>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <a class="blog-header-logo text-dark" href="#" style="font-size: 40px">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end d-flex align-items-center p-0">
                <i class="fas fa-search mr-2"></i>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
        <hr>
        <div class="container d-flex flex-row p-0">
            <ul class="nav justify-content-between w-100 p-0">
                <li class="nav-item">
                <a class="nav-link" href="#">World</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">U.S.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Technology</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Design</a>
                </li>    
                <li class="nav-item">
                <a class="nav-link" href="#">Culture</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Politics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Science</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Health</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="#">Style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Travel</a>
                </li>
            </ul>
        </div>

    </div>
    @yield('main')
    @include('layouts.footer-blog-examble')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">  
</body>
</html>