@extends('includes.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>List of Records</h3>
            </div>
            <div class="col-md-6">
                <a class="btn btn-info" href="{{route('create')}}">Create New Record</a>
            </div>
        </div>

        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>SN.</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
               <?php $count = ($cruds->currentpage()-1)*$cruds->perpage()+1; ?>
                @foreach($cruds as $crud)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $crud->name }}</td>
                        <td>{{ $crud->email }}</td>
                        <td>{{ $crud->country }}</td>
                        <td>{{ $crud->gender }}</td>
                        <td>
                            <form action="..." method="POST">
                                <a href="{{route('show',$crud->id)}}" class=" btn btn-info">Show</a>

                                <a href="{{route('edit',$crud->id)}}" class=" btn btn-warning">Update</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

            </table>
            {!! $cruds->links() !!}
        </div>

    </div>



@endsection
