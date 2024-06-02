@extends ('layouts.app')

@section('body')
    <h1 class="mb-0">Login</h1>
    <hr/>

  @if(session()->has('success'))
  <div class="alert" role="alert">
        {{ session('success') }}
    </div>
  @endif

@if(session()->has('loginError'))
    <div class="alert" role="alert">
        {{ session('loginError') }}
    </div>
@endif

<form action="/login" method="POST">
    @csrf
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Email</label>
        <input type="text" name="email" id="username "class="form-control @error('email') is-invalid @enderror" placeholder="Email" autofocus required value = "{{old('email')}}">
      </div>
      <div class="col">
        <label class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
      </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Login</button>
        </div>
    </div>
</form>
<p>Belum ada akun? <a href="/register">Register</a></p>
@endsection