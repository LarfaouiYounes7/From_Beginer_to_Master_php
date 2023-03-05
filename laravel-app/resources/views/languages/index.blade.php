@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                        <span class ="text-success">
                        SCHOOL TABLE MANAGEMENT
                        </span>

                    <!-- {{ __('Dashboard') }} -->
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <div class="container">
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                    <img class="card-img-top" src="https://dummyimage.com/300x200/000/fff&text=Create" alt="Create">
                                    <div class="card-body">
                                        <h5 class="card-title">Create</h5>
                                        <p class="card-text">To Add new data to your system.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                    <img class="card-img-top" src="https://dummyimage.com/300x200/000/fff&text=Read" alt="Read">
                                    <div class="card-body">
                                        <h5 class="card-title">Read</h5>
                                        <p class="card-text">View existing data in your system.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                    <img class="card-img-top" src="https://dummyimage.com/300x200/000/fff&text=Update" alt="Update">
                                    <div class="card-body">
                                        <h5 class="card-title">Update</h5>
                                        <p class="card-text">Modify existing data in your system.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                    <img class="card-img-top" src="https://dummyimage.com/300x200/000/fff&text=Delete" alt="Delete">
                                    <div class="card-body">
                                        <h5 class="card-title">Delete</h5>
                                        <p class="card-text">Remove existing data from your system.</p>
                                    </div>
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
