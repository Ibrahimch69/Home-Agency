<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Document</title>
    </head>
    <body>
   

<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: #FADDE1">
    <div class="container fluid">


      
              <a class="navbar-brand "  href="#" style="color: black">Home Agency</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  justify-content-center">
                  <a class="nav-link active " aria-current="page" href="/" style="color: black">Acceuil</a>
                  {{-- <a class="nav-link" href="contact" style="color: black">Features</a>
                  <a class="nav-link" href="#" style="color: black">Pricing</a> --}}
                  <a class="nav-link" href="contact" style="color: black">ajoute </a>
                  <a href="{{ route('login') }}" class="nav-link navbar-light " style="color: black">Log in</a>
                  <a href="{{ route('register') }}" class="nav-link nav justify-content-end"  style="color: black">Register</a>
                </div>
              </div>
            </div>
        </nav>

         
        @if (Route::has('login'))
            
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
         

            @if (Route::has('register'))
               
            @endif
        @endauth

@endif
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
