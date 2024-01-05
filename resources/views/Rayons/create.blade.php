@extends('layouts.template')

@section('content')
<br><br>
<div class="jumbotron py-4 px-5">
    <h2 class="display" style="color: black;">
        Tambah Data Rayon
    </h2>
    <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a> /Data Rayon</p>

</div>
    <form action="{{ route('rayon.store') }}" class="card mt-3 p-5" method="POST">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Rayon : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rayon" name="rayon">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label">Pembimbing siswa : </label>
            <div class="col-sm-10">
                <select name="user_id" class="form-control form-control-select">
                    @foreach($users as $user)
                    @if ($user['role'] == 'ps')
                    <option selected disabled hidden>Pilih</option>
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Data</button>
    </form>
@endsection
