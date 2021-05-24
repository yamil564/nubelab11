@extends('layout.app')

@section('content')
<div class="row align-items-center justify-content-evenly">
        <div class="col-md-4">
            <div class="card mt-4 shadow p-2">
                <div class="text-center mt-3">
                    <h2>Create a New Product</h2>
                </div>
                <div class="car-body">
                <br>
                    <form action="{{route('products.store')}}" method="POST" class="p-4">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{old('stock')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" step="any" value="{{old('price')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control" value="{{old('category')}}">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-primary mx-1 d-block" type="submit">Create</button>
                            <a class="btn btn-outline-secondary mx-1 d-block" href="{{route('products.index')}}">Cancel</a>
                        </div>
                        <hr>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach 
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-4 text-center">
            <h4>Remenber!</h4>
            <h1>GO | APPLICATION</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto impedit cum aperiam, officiis nulla perspiciatis consectetur repellat nam tempore consequuntur.</p>
            <a href="/product" class="btn btn-outline-info">Back to List</a>
        </div>
</div>
    
@endsection
