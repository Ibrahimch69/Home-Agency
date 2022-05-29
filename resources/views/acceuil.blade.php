<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/maison.css') }}">
</head>
<body>

  @include('layouts.navbar');

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.maisons-pierre.com/wp-content/uploads/2021/04/1300x600-maisons-pierre-lemag-quel-type-maison-choisir-couv.jpg" class="car" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="http://image.over-blog.com/7nG4s3SIL9DWZD1yEkxttu_nbws=/filters:no_upscale()/image%2F0668430%2F20210113%2Fob_c1a7b1_maison.jpg" class="car" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://maisonslacin.fr/wp-content/uploads/2020/02/Olympe_162.jpg" class="car" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <div class="row">
                @foreach( $contacts as $contact )
               
                <div class="col-md-4 col-12 col-lg-3">
                  <div class="card" style="width: 18rem;"> 
                    <img src="{{ $contact->image }}" class="card-img-top" id="card-image" alt="...">
                    <div class="card-body" style="background:#000000 " >
                      <h5 class="card-title"style="color:white" >{{ $contact->titre }}</h5>
                      <p class="card-text"style="color:white">{{ $contact->description }}</p>
                      <dt class="card-text"style="color:white">{{ $contact->prix }} €</dt>
                      <a href="produitDetail/{{$contact -> id}}" id="btn" class="btn" style="background:#FADDE1 ">Voir plus</a>
                
                    </div>
                  </div>
                </div>
            
                @endforeach
              </div> 

              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>