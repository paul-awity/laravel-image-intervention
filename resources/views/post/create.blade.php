@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ route('items.index') }}"><button type="button" class="btn btn-primary">Back</button></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
  <h2>Laravel 5.8 CRUD Operations</h2>
  
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <form action="{{ route('items.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <input _ngcontent-c0="" class="form-control form-control-lg" name="name" placeholder="Article Title" type="text">
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-lg" name="description" rows="5" placeholder="Body"></textarea>
                </div>
                    <button class="btn btn-primary btn-lg btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
