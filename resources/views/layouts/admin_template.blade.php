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
        <h1>Swan Admin</h1>        
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item p-2">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item p-2">
                <a class="nav-link" href="{{ url('/admin/new_product') }}">Add Product</a>
                </li>                        
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{ route('list_products') }}">All Products</a>
                </li>        
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Add Post</a>
                </li>        
            </ul>      
            </div>
        </nav>
    </header>

    @yield('content')
    
</body>
</html>