@extends('auth.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6">
                    <form action="{{ route('santri.store', Auth::user()->id ) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Alamat</label>
                          </div>
                          <div class="col-auto">
                            <input type="text" id="inputPassword6" class="form-control" name="alamat">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
