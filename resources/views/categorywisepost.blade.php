@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">
                    <h2> Category : {{ $category->name }}</h2>
                </div>
                <div class="card-body">
                    @foreach($category->posts as $post)
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3>
                                {{ $post->title }}
                            </h3>
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
