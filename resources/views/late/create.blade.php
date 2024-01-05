@extends('layouts.template')

@section('content')
    <div class="jumbroton py-2 px-1">
        <h4 class="display" style="color: black;">
            Tambah Data Keterlambatan
        </h4>
        <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a>Data Keterlambatan</p>
    </div>
<br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('late.store') }}" method="POST" class="card p-5" style="widht: 80%">
        @csrf
        

    </form>
