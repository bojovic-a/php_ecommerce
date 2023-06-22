@extends('layouts.template')

@section('header')
@endsection

@section('content')

<div class="container">
        <h1>About Us</h1>
    
</div>
<div class="container p-4">
<p>At Swan Fashion Studio, we are more than just a fashion brand; we are a passionate team of artists, designers, and dreamers united by a shared love for exquisite craftsmanship and unparalleled creativity. With years of experience in the industry, we have established ourselves as a trusted name synonymous with exceptional quality and avant-garde designs. Our relentless pursuit of perfection is evident in every stitch, every fabric choice, and every intricate detail that graces our garments.</p>
</div>
<!-- Carousel wrapper -->
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button
      class="carousel-control-prev position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                class="card-img-top"
                alt="Waterfall"
              />              
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <!-- Inner -->
</div>
<div class="container">
    <p>As a brand, we believe in empowering individuals through the transformative power of fashion. Our mission is to inspire confidence, embrace diversity, and celebrate the uniqueness of every person who walks through our doors. We strive to create an inclusive space where individuals of all backgrounds, sizes, and styles can find their own voice in the world of fashion. With our dedicated team of fashion consultants and stylists, we are committed to providing personalized experiences that go beyond clothing, helping our customers discover their true style and express themselves authentically. At Swan Fashion Studio, we invite you to embark on a journey of self-discovery and sartorial elegance that transcends trends and leaves a lasting impression.</p>
</div>
<!-- Carousel wrapper -->
    @endsection

@section('footer')
@endsection