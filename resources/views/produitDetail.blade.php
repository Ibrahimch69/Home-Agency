<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/maison.css') }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $contacts->name }}</title>
    </head>
    <body>
        @include('layouts.navbar');
  
        <div class="mainContainer">
            <div class="topContainer">
                <img src="{{ $contacts->image }}" alt="" class="img">
                <div class="infoContainer">
                    <h3 class="title">{{ $contacts->titre }}</h3>
                    <p class="price">{{ $contacts->prix }} €</p>
                    <div class="btnContainer">
                        <form>
                            <input type="button" style="background:#FADDE1 " value="réserve" onClick="Message()">
                            </form>
                            <script type="text/javascript">
                                function Message() {
                                    var msg="Merci de contact l'agence pour réserver ce bien";
                                
                                    alert(msg);
                                }
                             </script>
                       
                        
                    </div>
                </div>
            </div>
            <div class="description">
                <p class="">{{ $contacts->description }}</p>
            </div>
        </div>
   
    </body>
</html>