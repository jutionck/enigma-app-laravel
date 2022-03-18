@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Ubah Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="floatingInput" placeholder="name@example.com" value="{{ $student->name }}">
                        <label for="floatingInput">Nama Mahasiswa</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="npm" class="form-control @error('npm') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password" value="{{ $student->npm }}">
                        <label for="floatingPassword">NPM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password" value="{{ $student->email }}">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="image" class="form-control" id="floatingPassword" placeholder="Password"
                            value="{{ $student->image }}">
                        <label for="floatingPassword">Image</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
                    <a href="{{ route('students.index') }}" class="btn btn-warning">BATAL</a>
                </form>
            </div>
        </div>
    </div>
@endsection
