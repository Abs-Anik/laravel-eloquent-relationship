@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                    <h1>Add A Post</h1>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('post-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Enter Post Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Enter Post Description</label>
                            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-success" value="Publish">
                    </form>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Post List</h2>
                </div>
                <div class="card-body">
                    @foreach($posts as $post)
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3>{{ $post->title }} in <mark>{{ $post->category->name }}</mark></h3>
                            <h5 class="text-info">{{ $post->user->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
