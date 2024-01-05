@extends('layouts.template')

@section('content')
<h2>Tambah data siswa</h2>
<a href="/">Home</a> / <a href="{{ route('student.index') }}">Data Siswa</a>
<form action="{{ route('student.store') }}" method="POST" class="card p-5">
    @csrf
    <div class="mb-3 row">
        <label for="nis" class="col-sm-2 col-form-laber">Nis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nis" name="nis">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-laber">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="rombel_id" class="col-sm-2 col-form-laber">Rombel</label>
        <div class="col-sm-10">
            <select name="rombel_id" class="form-control form-control-select">    
            @foreach (\App\Models\Rombel::all() as $rombel)
            <option value="{{ $rombel>id }}">{{ $rombel->rombel }}</option>
            @endforeach
        </select>

        </div>
    </div>
    <div class="mb-3 row">
        <label for="rayon_id" class="col-sm-2 col-form-laber">Rayon</label>
        <div class="col-sm-10">
            <select name="rayon_id" class="form-select" id="rayon_id" >
            @foreach ($rayon as $data )
            <option value="{{ $data->id }}">{{ $data->rayon }}</option>
            @endforeach
        </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Kirim Data</button>

</form>
