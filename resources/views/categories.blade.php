@extends('layouts.main')

@section('container')

<style>
    h5{
        background-color: rgba(255, 255, 255, .5);
        /* background-color: rgba(93,135,255, .2); */
    }
    h5:hover{
        background-color: #fff;
    }
    h5:active{
        background-color: #fff;
    }
</style>

<h3 class="mb-5 mt-5 text-center fw-bolder">Post Categories</h3>

<div class="container justify-content-between p-0">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark border-0 mb-4">
                        @if($category->image)
                            <div>
                                <img src="{{ asset('storage/' . $category->image) }}" class="card-img"  style="min-width: 420px; min-height: 250px; overflow: hidden;" alt="{{ $category->name }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/500x300/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        @endif

                        <div class="card-img-overlay p-5">
                            <h5 class="card-title text-center py-2 rounded-5 categories" style=" border-top: 100px #000; margin-top: 40%;">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection