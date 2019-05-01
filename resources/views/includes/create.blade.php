@extends('includes.layout')

@section('content')
 <div class="container-fluid">
     <div class="row">
     <div class="col-md-6">
         <h3>Create New Record:</h3>
     </div>
     <div class="col-md-6">
         <a href="{{route('index')}}" class="btn btn-info">Back</a>
     </div>
     </div>


    <div class="row">

        <div class="col-md-12">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="sex">Gender:</label>
                    <input type="text" class="form-control" id="sex" name="gender">
                </div>

                <button type="submit" class="btn btn-success">Add Record</button>
            </form>
        </div>
    </div>
    </div>
@endsection