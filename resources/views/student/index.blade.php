@extends('layouts.main')

@section('container')

<h1>Halaman Student</h1>

<a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

@endsection