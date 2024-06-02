@extends('layouts.app')

@section('body')
<h1>Testing Page Home</h1>
<h1>Welcome, {{ auth()->user()->username}}</h1>

<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form method="post">
    @csrf
    <button type="submit">Create Planner</button>
</form>

<table class="table table-striped">
    <tr>
        <td>Time</td>
        <td>{{ $planner->date }}</td>
    </tr>
    <tr>
        <td>platform</td>
        <td>{{ $planner->platforms }}</td>
    </tr>
    <tr>
        <td>goals</td>
        <td>{{ $planner->goals }}</td>
    </tr>
    <tr>
        <td>Idea</td>
        <td>{{ $planner->idea }}</td>
    </tr>
    <tr>
        <td>Content Pillar</td>
        <td>{{ $planner->content_pillar }}</td>
    </tr>
        <tr>
            <td>Type</td>
            <td>{{ $planner->type }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ $planner->status }}</td>
        </tr>
        <tr>
            <td>Visual</td>
            <td>{{ $planner->visual }}</td>
        </tr>
        <tr>
            <td>Visual_det</td>
            <td>{{ $planner->visual_det }}</td>
        </tr>
        <tr>
            <td>Caption</td>
            <td>{{ $planner->caption }}</td>
        </tr>
        <tr>
            <td>Hastag</td>
            <td>{{ $planner->hastag }}</td>
        </tr>
</table>

@endsection
