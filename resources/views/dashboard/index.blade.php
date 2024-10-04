@extends('dashboard.layouts.main')

@section('container')

    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div> --}}

    <style>
        .icon{
            /* font-size: 20px;
            background-color: #ddd;
            padding: 10px; */
        }
    </style>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Welcome back, {{ auth()->user()->name }}</h5>
            <p class="mb-0">Have a Good day ! </p>
        </div>
    </div>

    @can('admin')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex">
                        <span class="d-flex">
                            <i class="ti ti-article icon text-primary fs-6 bg-light-primary p-2 rounded-circle"></i>
                            <h5 class="fw-semibold mt-2 mx-3">Posts</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex">
                        <span class="d-flex">
                            <i class="ti ti-category icon text-primary fs-6 bg-light-primary p-2 rounded-circle"></i>
                            <h5 class="fw-semibold mt-2 mx-3">Posts Categories</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex">
                        <span class="d-flex">
                            <i class="ti ti-user icon text-primary fs-6 bg-light-primary p-2 rounded-circle"></i>
                            <h5 class="fw-semibold mt-2 mx-3">Users</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
    
            
@endsection
