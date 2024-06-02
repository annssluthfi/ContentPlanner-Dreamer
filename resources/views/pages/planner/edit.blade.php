@extends('layouts.app')

@section('body')
<h1>Testing Page Home</h1>
<h1>Welcome, {{ auth()->user()->username}}</h1>

<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form action="{{ route('planner.update', $planner->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Date</label>
        <input type="date" name="date" class="form-control" placeholder="Date" value="{{$planner->date}}">
      </div>
      <div class="col">
        <label class="form-label">Platform</label>
        <input type="text" name="platforms" class="form-control" placeholder="Author" value="{{$planner->platforms}}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Goals</label>
        <input type="text" name="goals" class="form-control" placeholder="Year"value="{{$planner->goals}}">
      </div>
      <div class="col">
        <label class="form-label">Idea</label>
        <input type="text" name="idea" class="form-control" placeholder="Year" value="{{$planner->idea}}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Content Pillar</label>
        <input type="text" name="content_pillar" class="form-control" placeholder="Year" value="{{$planner->content_pillar}}">
      </div>
      <div class="col">
        <label class="form-label">Status</label>
        <input type="text" name="status" class="form-control" placeholder="Year" value="{{$planner->status}}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Progress</label>
        <input type="text" name="progress" class="form-control" placeholder="Year" value="{{$planner->progress}}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Visual</label>
        <input type="text" name="visual" class="form-control" placeholder="Year" value="{{$planner->visual}}">
      </div>
      <div class="col">
        <label class="form-label">Visual_det</label>
        <input type="text" name="visual_det" class="form-control" placeholder="Year" value="{{$planner->visual_det}}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Caption</label>
        <input type="text" name="caption" class="form-control" placeholder="Year" value="{{$planner->caption}}">
      </div>
      <div class="col">
        <label class="form-label">Hastag</label>
        <input type="text" name="hastag" class="form-control" placeholder="Year" value="{{$planner->hastag}}">
      </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection