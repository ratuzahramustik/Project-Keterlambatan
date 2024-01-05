@extends('layouts.template')

@section('content')
<br><br>
<div class="jumbotron py-4 px-5">
    <h2 class="display" style="color: black;">
        Tambah Data Rombel
    </h2>
    <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a> /Data Rombel</p>

</div>

    <form action="{{ route('rombel.store') }}" class="card mt-3 p-5 shadow p-3 mb-5 shadow p-3 mb-5 bg-body rounded-0"
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
            <label for="name" class="col-sm-2 col-form-label">Rombel : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rombel" name="rombel">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Data</button>
        </form>


    @endsection
