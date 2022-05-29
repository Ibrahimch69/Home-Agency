@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">titre : {{ $contacts->titre }}</h5>
        <p class="card-text">description : {{ $contacts->description }}</p>
        <p class="card-text">prix : {{ $contacts->prix }}</p>
        <p class="card-text">image : {{ $contacts->image }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>