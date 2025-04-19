@extends('layouts.layout')

@section('content')
<!-- Carrusel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="media\laptops-7917663_1280.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aprovecha los increíbles precios en laptops</h5>
        <p>Da clic para ver más</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="media\kenny-leys-Imc_FwGf92U-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nuevos modelos de smartphones</h5>
        <p>Estrena celular nuevo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media\pedro-henrique-santos-4IoS45J9pmk-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arma tu PC</h5>
        <p>Tenemos todo lo que buscas</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Contenedor de galeria de promociones -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
  <div class="text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Nuevos productos</h2>
        <p class="lead">Nuevos modelos de Smartphone.</p>
    </div>
    <div id="imagen" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <a href="{{ route('products_smartphone')}}"><img  src="media\sara-kurfess-6lcT2kRPvnI-unsplash.jpg" alt="" width="260px" height="290px"></a>
    </div>
  </div>  
  <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Nuevos productos</h2>
        <p class="lead">Nuevos modelos de Laptop</p>
    </div>
    <div id="imagen" class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <a href="{{ route('products_laptop')}}"><img src="media\ales-nesetril-Im7lZjxeLhg-unsplash.jpg" alt="" width="260px" height="300px"></a>
    </div>
  </div> 
  <div class="text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Nuevos productos</h2>
        <p class="lead">Nuevos modelos de SmartTV</p>
    </div>
    <div id="imagen" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <a href="{{ route('products_smartTV')}}"><img src="media\jonas-leupe-dZmNJKFDuVI-unsplash.jpg" alt="" width="260px" height="300px"></a>
    </div>
  </div> 
</div>
@endsection