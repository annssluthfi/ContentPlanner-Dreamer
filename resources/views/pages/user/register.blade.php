@extends ('layouts.app')

@section('body')
    <h1 class="mb-0">Register</h1>
    <hr/>

<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}">
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Register</button>
        </div>
    </div>
</form>
<p>Belum ada akun? <a href="">Register</a></p>
@endsection