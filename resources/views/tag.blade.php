@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tag</div>

                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="title" placeholder="Tag Name">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
