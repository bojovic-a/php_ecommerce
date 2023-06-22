@extends('layouts.template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<style>
    h1,
    p,
    h2,
    .h1-white {
        color: azure;
    }
    .bgi-image {
        background-image: url('{{ asset('images/website/hero.jpeg') }}');
        background-size: cover;
        height: 80vh;           
    }
</style>
<body> 
    @section('header')
    @endsection

    @section('content')    
    
        <div class="px-4 py-5 w-100 text-center bgi-image mb-5">  
            <h1 class="h1-white">Swan Studio</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Welcome to Swan Fashion Studio, where elegance meets style and every individual becomes a fashion icon. Step into a world of limitless creativity, where we blend contemporary designs with timeless classics, redefining the art of fashion</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{route('product_categories')}}" type="button" class="btn btn-primary btn-lg px-4 gap-3 py2">Shop Now</a>
                <a href="{{ route('posts') }}" type="button" class="btn btn-secondary btn-lg px-4">Go to Blog</a>
              </div>
            </div>
        </div>
      
        <div  style="height: 100px;"></div>
      <div class="container marketing mu-5">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle object-fit-cover" src="{{ asset('images/website/male-clothing.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Men's Clothing</h2>
            <p class="text-dark">Join us on our fashion odyssey as we delve into the latest trends, style tips, and industry insights, guiding you towards a world of sartorial inspiration and self-expression.
            </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle object-fit-cover" src="{{ asset('images/website/female-clothing.webp') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Women's Clothing</h2>
            <p class="text-dark">Experience the epitome of grace and femininity as you explore Swan Fashion Studio's collection, where each piece is designed to celebrate the beauty and individuality of every woman.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle object-fit-cover" src="{{ asset('images/website/blog-image.jpeg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Fashion Blog</h2>
            <p class="text-dark">Join us on our fashion odyssey as we delve into the latest trends, style tips, and industry insights, guiding you towards a world of sartorial inspiration and self-expression.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        {{--<hr class="featurette-divider">
        
            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> <span class="text-muted"></span></h2>
                <p class="lead">{{ $categories[0]->naziv }}</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{ route( }}" alt="Generic placeholder image">
            </div>
            </div>

            <hr class="featurette-divider">
            --}}

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>

    @endsection

    @section('footer')
    
    @endsection
        
</body>
</html>