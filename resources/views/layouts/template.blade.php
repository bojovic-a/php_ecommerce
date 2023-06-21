<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>     
    * {
        font-family:Georgia, 'Times New Roman', Times, serif;
        cursor: pointer;
    }
    header {
        background-color: #CFB53B;
    }
    nav{
        background-color: grey;
    }
    .subcategory { 
        padding-left: 10px;
        cursor: pointer;
    }
    .subcategory:hover {
        color: darkgrey;
    }
    main {
        padding: 0 120px;
        /* background-color: #efefef; */
    }
</style>
<body>
    @yield('header')
    <header>
        <div class="header-top d-flex justify-content-center">
            <div class="d-flex justify-content-center main-image-box w-50">
                <img class="w-25" src="{{ url('/images/website/Swan-logos_transparent.png') }}" alt="">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center w-100">                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-around w-100">
                <div class="d-flex flex-row">
                    <li class="nav-item p-2">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item p-2">
                    <a class="nav-link" href="{{ url('/product_categories') }}">Shop</a>
                    </li>        
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Blog</a>
                    </li>        
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">About us</a>
                    </li>        
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </div>
                <div class="d-flex flex-row">
                @if (isset($user_id))
                    <li class="nav-item p-2">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item p-2">
                        <a href="{{ route('login_form') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="{{ route('register_form') }}" class="nav-link">Register</a>
                    </li>
                @endif
                </div>              
            </ul>      
            
            </div>
            
        </nav>
    </header>

    @yield('content')
    <div class="main">
        
    </div>

    @yield('footer')
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">    
    
        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4 d-flex flex-column">
                <!-- Content -->                                
                <!-- <p class="text-center">Swan Studio</p> -->
                <div class="d-flex justify-content-center">
                    <img src="{{ url('/images/website/Swan-logos_transparent.png') }}" class="w-50 mx-auto" alt="">                 
                </div>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Shop
                </h6>
                <p>
                <div class="d-flex justify-content-lg-between">
                    @foreach($categories as $category)
                    <div class="">
                        <p> {{$category->naziv}} </p>
                        
                        @foreach($category->product_subcategories() as $subcategory)
                        <div class="subcategory">
                            <p>{{ $subcategory->naziv }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endforeach 
                </div>
                </p>                
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->            
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> Trg Republike 6, 11 000 Belgrade</p>
                <p>
                <i class="fas fa-envelope me-3"></i>
                office@swanstudio.com
                </p>
                <p><i class="fas fa-phone me-3"></i> +381 60 1234 567</p>
                <p><i class="fas fa-print me-3"></i> +381 67 6543 210</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Aleksandar Bojovic IT41/21</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>