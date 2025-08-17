@extends('layouts.app')

@section('title', 'Data About')

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
            <form action="/admin/about/{{$abouts->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">description history</label>
                    <textarea name="description_history" id="" cols="10" rows="5" class="form-control"
                        placeholder="Description History">{{$abouts->description_history}}</textarea>
                </div>
                @error('description_history')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description vision</label>
                    <textarea name="description_vision" id="" cols="10" rows="5" class="form-control"
                        placeholder="Description Vision">{{$abouts->description_vision}}</textarea>
                </div>
                @error('description_vision')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description mission1</label>
                    <textarea name="description_mission1" id="" cols="5" rows="5" class="form-control"
                        placeholder="Description Mission1">{{$abouts->description_mission1}}</textarea>
                </div>
                @error('description_mission1')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description mission2</label>
                    <textarea name="description_mission2" id="" cols="5" rows="5" class="form-control"
                        placeholder="Description Mission2">{{$abouts->description_mission2}}</textarea>
                </div>
                @error('description_mission2')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description mission3</label>
                    <textarea name="description_mission3" id="" cols="5" rows="5" class="form-control"
                        placeholder="Description Mission3">{{$abouts->description_mission3}}</textarea>
                </div>
                @error('description_mission3')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description ceo</label>
                    <textarea name="description_ceo" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description CEO">{{$abouts->description_ceo}}</textarea>
                </div>
                @error('description_ceo')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description secretary</label>
                    <textarea name="description_secretary" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description Secretary">{{$abouts->description_secretary}}</textarea>
                </div>
                @error('description_secretary')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description treasurer</label>
                    <textarea name="description_treasurer" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description Treasurer">{{$abouts->description_treasurer}}</textarea>
                </div>
                @error('description_treasurer')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description supervisor</label>
                    <textarea name="description_supervisor" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description Supervisor">{{$abouts->description_supervisor}}</textarea>
                </div>
                @error('description_supervisor')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description member1</label>
                    <textarea name="description_member1" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description Member1">{{$abouts->description_member1}}</textarea>
                </div>
                @error('description_member1')
                <small style="color: red;">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">description member2</label>
                    <textarea name="description_member2" id="" cols="1" rows="1" class="form-control"
                        placeholder="Description Member2">{{$abouts->description_member2}}</textarea>
                </div>
                @error('description_member2')
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