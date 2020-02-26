@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <span class="float-right"><a href="/home" class="btn btn-secondary">Go back</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="post" action="/listings/{{ $listing->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Enter your name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $listing->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter your address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" value="{{ $listing->address }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter your website</label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Enter website" value="{{ $listing->website }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter your email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $listing->email }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter your phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{ $listing->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter your bio</label>
                        <input type="text" class="form-control" name="bio" id="bio" placeholder="Enter bio" value="{{ $listing->bio }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection