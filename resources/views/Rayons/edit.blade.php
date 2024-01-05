@extends('layouts.template')

@section('content')
<br><br>
    <form action="{{ route('rayon.update', $rayon['id']) }}" class="card mt-3 p-5" method="POST">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif

        @csrf
        @method('PATCH')
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Rayon :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="rayon" name="rayon">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Pembimbing Siswa :</label>
            <div class="col-sm-10">
                <select name="user_id" class="form-control form-control-select">
                    @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">ubah</button>
    </form>
@endsection
