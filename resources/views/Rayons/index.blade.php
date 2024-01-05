@extends('layouts.template')

@section('content')
<br><br><br>
    @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <br>
    <div class="p-4">
        <a href="{{ route('rayon.create') }}" class="btn btn-secondary float-sm-end">Tambah Pengguna</a>
    </div>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Rayon</th>
                <th>Pembimbing siswa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($rayons as $item)
                <tr>
                    {{-- name, type, price, stock disamakan dengan yang ada di migrations--}}
                    {{-- <td>{{ $no++ }}</td> --}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['rayon'] }}</td>
                    <td>{{ $item->user->name}}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('rayon.edit', $item['id']) }}" class="btn btn-primary me-2 ">Edit</a>
                        <form action="{{ route('rayon.delete', $item['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            {{--onclick="return confirm('Hapus data?');"--}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
