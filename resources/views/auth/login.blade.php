@extends('auth.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <h3>Login</h3>
                    <div class="card-body">
                        <form action="{{ route('dologin') }}" method="post">
                            @csrf
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
                            <button class="btn btn-success" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
