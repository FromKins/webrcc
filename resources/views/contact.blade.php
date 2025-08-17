@extends('layouts.app')

@section('title', 'Data Contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Success</strong>
                <p>{{$message}}</p>
            </div>
            @endif
            <form action="/admin/contact/{{$contacts->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address"
                        value="{{$contacts->address}}">
                </div>
                @error('address')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email"
                        value="{{$contacts->email}}">
                </div>
                @error('email')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone"
                        value="{{$contacts->phone}}">
                </div>
                @error('phone')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control"
                        placeholder="Maps Embed">{{$contacts->maps_embed}}</textarea>
                </div>
                @error('maps_embed')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
