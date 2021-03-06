@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 8 CRUD Example from scratch - HDTuto.com</h2>

            </div>

            <div class="pull-right">

            <a class="btn btn-success" href="{{ url('categories') }}"> Categories</a>

            </div>

            <div class="pull-right">

                 <a class="btn btn-success" href="{{ url('add_products') }}"> Create New Product</a>

            </div>

        </div>

    </div>

    <div class="row">
        <div class="mx-auto pull-right">
            <div class="col-lg-12">
                <form action="{{ url('products') }}" method="GET" role="search">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term" >
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Search projects">
                                Search
                                </button>
                            </span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="input-group">
                            <a href="{{ url('products') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        Refresh
                                    </button>
                                </span>
                            </a>
                        </div>
                        </div>
                    </div>
                </form>
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

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->detail }}</td>

            <td>

            <form action="{{ url('products_destroy',$product->id) }}" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

            </td>

            <td> 
                <a class="btn btn-info" href="{{ url('products_show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ url('products_edit',$product->id) }}">Edit</a>
            </td> 

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection