@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="prix" class="form-control"></br>
        <label>image</label></br>
        <input type="text" name="image" id="image" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        

    </form>
   
  </div>
</div>
 
@stop