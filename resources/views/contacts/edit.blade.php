@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>titre</label></br>
        <input type="text" name="titre" id="titre" value="{{$contacts->titre}}" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" value="{{$contacts->description}}" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="prix" value="{{$contacts->prix}}" class="form-control"></br>
        <label>image</label></br>
        <input type="text" name="image" id="image" value="{{$contacts->image}}" class="form-control"></br>
     
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
