@extends('products.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Entry</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

        </div>

    </div>

</div>

     

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

     

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" class="form-control" placeholder="Patrol Leader">

            </div>

        </div>



      <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Category:</strong>

            <input type="text" name="category" class="form-control" placeholder="Category">

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Role:</strong>

             <input type="text" name="role" class="form-control" placeholder="Role">

        </div>

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Incident:</strong>

            <input type="text" name="incident" class="form-control" placeholder="Incident">

        </div>

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Location:</strong>

            <input type="text" name="location" class="form-control" placeholder="Location">

        </div>

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Departure:</strong>

             <input type="text" name="departure" class="form-control" placeholder="Departure">

        </div>

    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Arrival:</strong>

            <input type="text" name="arrival" class="form-control" placeholder="Arrival">

        </div>

    </div>


    

       
       
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail:</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

     

</form>

@endsection