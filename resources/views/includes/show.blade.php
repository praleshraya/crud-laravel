@extends('includes.layout')

@section('content')

 <div class="container-fluid">
     <strong>Name:</strong> {{$crud->name}}
     <strong>E-mail:</strong> {{$crud->email}}
     <strong>Country:</strong> {{$crud->country}}
     <strong>Gender:</strong> {{$crud->gender}}
 </div>
@endsection