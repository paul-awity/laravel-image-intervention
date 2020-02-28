@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ route('items.create') }}"><button type="button" class="btn btn-primary">Create</button></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
  <h2>Laravel 5.8 CRUD Operations</h2>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Image</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
        <tr>
          <td></td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td><img src="{{url('products/'.$product->image) }}" alt="{{ $product->title }}"></td>
          <td><a href="{{ route('items.edit',$product->id) }}"> <button type="button" class="btn btn-success">Edit</button></a></td>
          <td>
          <!---
          <form action="{{ route('items.destroy',$product->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          --->
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
