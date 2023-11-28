@extends('auth.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Registrasi</h1>
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Nama</label>
                      </div>
                      <div class="col-auto">
                        <input type="text" id="inputPassword6" class="form-control" name="name">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Email</label>
                      </div>
                      <div class="col-auto">
                        <input type="email" id="inputPassword6" class="form-control" name="email">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Password</label>
                      </div>
                      <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" name="password">
                    </div>
                    {{-- <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Confirm Password</label>
                      </div>
                      <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" name="confirm_password">
                    </div> --}}
                    {{-- <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Role</label>
                      </div>
                      <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" name="confirm_password">
                    </div> --}}
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
