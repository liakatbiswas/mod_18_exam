@extends('master')
@section('content')
    <div class="py-5">
        <div class="container px-5 pb-5">
            <div class="row">

                <h3 class="card-title my-4 text-center">Posts by Category</h3>
                @foreach ($categories as $category)
                    <div class="col-md-12">
                        <h3 class="text-center mb-4">Category Name: {{ $category->name }}</h3>
                    </div>

                    @foreach ($category->posts as $post)
                        <div class="col-md-6">
                            <div class="post p-5 mb-3 bg-info">
                                <h3>{{ $post->title }}</h3>
                                <img class="img-fluid" src="{{ $post->post_thumb }}" alt="">
                                <p>{{ $post->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
@endsection
