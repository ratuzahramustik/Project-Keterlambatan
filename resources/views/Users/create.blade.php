@extends('layouts.template')

@section('content')
<br><br>
<div class="jumbotron py-4 px-5">
    <h2 class="display" style="color: black;">
        Tambah Data User
    </h2>
    <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a> /Data User</p>

</div>
    <form action="{{ route('user.store') }}" class="card mt-3 p-5 shadow p-3 mb-5 shadow p-3 mb-5 bg-body rounded-0"
        method="POST">
        @csrf

        @if (Session::get('succes'))
            <div class="alert alert-succes"> {{ $request->session()->get('succes') }}</div>
        @endif

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label">Tipe Pengguna : </label>
            <div class="col-sm-10">
                <select name="role" id="role" class="form-control">
                    <option selected hidden disabled>Pilih</option>
                    <option value="ps">ps</option>
                    <option value="admin">admin</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Data</button>
        </form>


    @endsection
