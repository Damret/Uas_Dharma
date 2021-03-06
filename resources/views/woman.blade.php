@extends('layout.base')
@section('content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/woman">Woman</a></li>
          <li class="breadcrumb-item active" aria-current="page">On Bike Woman</li>
        </ol>
      </nav>
    <section class="head-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h5>On Bike Woman</h5>
                </div>
                <div class="col">
                    <p>
                        Explore our women's range of high-performance jerseys, bib shorts, vest, jackets and acc...
                    </p>
                    <button>Read More ></button>
                </div>
            </div>
        </div>
    </section>
    <section class="man-product">
        <div class="row">
            <div class="col banner">
                <img src="./Assets/Images/women1.jpg" class="img-fluid w-100 height:auto;" alt="Responsive image">
            </div>
            <div class="col">
                <div class="card-group">
                    <div class="card">
                    <img src="./Assets/Images/women2.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                    <div class="card-img-overlay">
                        <p class="card-text">Vector Pro Air Jersey</p>
                        <p class="card-text">$ 200</p>
                    </div>
                    </div>
                    <div class="card">
                        <img src="./Assets/Images/women3.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                        <div class="card-img-overlay">
                            <p class="card-text">Vector Pro Air Jersey</p>
                            <p class="card-text">$ 200</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <section class="man-product">
        <div class="row">
            <div class="card-group">
                <div class="card">
                <img src="./Assets/Images/women2.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                <div class="card-img-overlay">
                    <p class="card-text">Vector Pro Air Jersey</p>
                    <p class="card-text">$ 200</p>
                </div>
                </div>
                <div class="card">
                    <img src="./Assets/Images/women3.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                    <div class="card-img-overlay">
                        <p class="card-text">Vector Pro Air Jersey</p>
                        <p class="card-text">$ 200</p>
                    </div>
                 </div>
                 <div class="card">
                    <img src="./Assets/Images/women2.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                    <div class="card-img-overlay">
                        <p class="card-text">Vector Pro Air Jersey</p>
                        <p class="card-text">$ 200</p>
                    </div>
                    </div>
                    <div class="card">
                        <img src="./Assets/Images/women3.webp" class="img-fluid w-100 height:auto;" alt="Responsive image">
                        <div class="card-img-overlay">
                            <p class="card-text">Vector Pro Air Jersey</p>
                            <p class="card-text">$ 200</p>
                        </div>
                     </div>
            </div>    
        </div>
    </section>
    @stop