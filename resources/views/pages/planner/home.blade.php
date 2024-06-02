@extends('layouts.app')

@section('body')
<h1>Testing Page Home</h1>
<h1>Welcome, {{ auth()->user()->username}}</h1>

<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form action="{{ route('planner.create') }}" method="get">
    @csrf
    <button type="submit">Create Planner</button>
</form>

@foreach($planners as $p)
<table class="table table-striped">
    <tr>
        <td>Time</td>
        <td>{{ $p->date }}</td>
    </tr>
    <tr>
        <td>platform</td>
        <td>{{ $p->platforms }}</td>
    </tr>
    <tr>
        <td>goals</td>
        <td>{{ $p->goals }}</td>
    </tr>
    <tr>
        <td>Idea</td>
        <td>{{ $p->idea }}</td>
    </tr>

    <tr>
        <td colspan="2">
            <a href="{{ route('planner.show', $p->id) }}">Cek detail</a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <a href="{{ route('planner.edit', $p->id) }}">Edit</a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <form action="{{ route('planner.destroy', $p->id) }}" method="post" type="button" onsubmit="return confirm('delete?')">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger m-0">Delete</button>
            </form>
        </td>
    </tr>
</table>
@endforeach

@endsection