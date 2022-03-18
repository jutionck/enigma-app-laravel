@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NPM</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->npm }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-success btn-sm">Edit Data</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('are you sure?')">Hapus Data</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
