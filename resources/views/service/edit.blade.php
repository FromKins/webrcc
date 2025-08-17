@extends('layouts.app')

@section('title', 'Edit Data Service')

@section('content')

<div class="container">
    <a href="/admin/service" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"
                        value="{{$service->title}}">
                </div>
                @error('title')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <img src="/image/{{$service->image}}" alt="" class="img-fluid"
                    style="max-width: 200px; max-height: 200px;">
                <div class=" form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
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
