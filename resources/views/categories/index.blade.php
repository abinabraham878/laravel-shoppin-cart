@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 8 CRUD Example from scratch - HDTuto.com</h2>

            </div>

            <div class="pull-right">

                 <a class="btn btn-success" href="{{ url('categories_create') }}"> Create New Category</a>

            </div>

            <div class="pull-right">

                 <a class="btn btn-success" href="{{ url('products') }}"> Products</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Parent id</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($category as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->parent_id }}</td>

            <td>

            <form action="{{ url('category_destroy',$product->id) }}" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

            </td>

            <td> 
                <a class="btn btn-info" href="{{ url('category_show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ url('category_edit',$product->id) }}">Edit</a>
            </td> 
           

        </tr>

        @endforeach

    </table>

  

    {!! $category->links() !!}

      
</div>
@endsection