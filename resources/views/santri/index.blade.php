@extends('auth.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>selamat datang, {{ Auth::user()->name }}</h1>
                <h1>Alamat, {{ Auth::user()->santri->alamat }}</h1>
                <a href="{{ route('santri.edit', Auth::user()->id) }}">edit</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
@endsection

