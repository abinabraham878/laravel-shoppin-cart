@extends('layout.master')
  

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Category</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ url('categories') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Category Name:</strong>

                {{ $category->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Parent id:</strong>

                {{ $category->parent_id }}

            </div>

        </div>

    </div>
</div>
@endsection