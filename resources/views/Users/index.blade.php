@extends('layouts.template')

@section('content')
<br>
<div class="jumbotron py-4 px-5">
    <h2 class="display" style="color: black;">
        Data User
    </h2>
    <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a> /Data User</p>
</div>
    @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert-warning">{{Session::get('deleted')}}</div>
    @endif
    <br>
    <div class="p-4">
        <a href="{{ route('user.create') }}" class="btn btn-secondary float-sm-end">Tambah Pengguna</a>
    </div>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $item)
                <tr>
                    {{-- name, type, price, stock disamakan dengan yang ada di migrations--}}
                    {{-- <td>{{ $no++ }}</td> --}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['role'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary me-2 ">Edit</a>
                        <form action="{{ route('user.delete', $item['id']) }}" method="post">
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
